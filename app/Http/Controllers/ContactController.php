<?php
namespace App\Http\Controllers;
//namespace App\Http\Requests\EditContact;
use App\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Auth;
use JeroenDesloovere\VCard\VCard;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('contact.owner',['only'=>'edit']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = \Request::get('search'); //<-- we use global request to get the param of URI
        $contacts = Contact::where('name','like','%'.$search.'%')->where('user_id',Auth::user()->id)->orderBy('name')->paginate(3);
        return view('contacts.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('contacts.create')->with(['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{
            Contact::create($request->all());
            $request->session()->flash('message','The contact has been added successfully!');
            return redirect()->route('contact.index');
        }
        catch(QueryException $e){
            $error_code = $e->errorInfo[1];
            if($error_code == 1062){
                $request->session()->flash('error','The contact cannot be added, duplicate record found!');
                return redirect()->route('contact.index');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //die($contact->slug);
        $result = Contact::where('id', $contact->id)->first();
        $date_array = explode("-",$result->dob);
        $Born = Carbon::create($date_array[0],$date_array[1],$date_array[2]);
        $age = $Born->diff(Carbon::now())->format('%y Year(s), %m Months and %d Days');


        try{
            return view('contacts.show',compact('contact'))->with('age',$age);
        }
        catch(QueryException $e){
            return redirect()->route('contact.index')->with('error','This contact is unavailable!');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $user = Auth::user();
        return view('contacts.edit',compact('contact'))->with(['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->all());
        return redirect()->route('contact.index')->with('message','The contact has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')->with('message','The contact has been deleted successfully!');
    }

    /** View soft deleted items*/
    public function trash()
    {
        $contacts = Contact::onlyTrashed()->where('user_id',Auth::user()->id)->paginate(2);
        return view('contacts/trash',compact('contacts'));
    }

    /** Restore soft deleted items*/
    public function restore($id)
    {
        $contacts = Contact::withTrashed()->find($id)->restore();
        return redirect ('contact')->with('message','The contact has been Restored!');
    }

    /**Export contact to vCard*/
    public function exportToVcard($id)
    {
        //Retrieve contact details from DB
        $result = Contact::where('id', $id)->first();

        //Define variables
        $name = $result->name;
        $phone = $result->phone;
        $email = $result->email;
        $address = $result->address;
        $organization = $result->organization;

        $vcard = new VCard();

        //Add contact data to VCard
        $vcard->addName($name);
        $vcard->addPhoneNumber($phone);
        $vcard->addEmail($email);
        $vcard->addAddress($address, 'Street');
        $vcard->addCompany($organization);

        //Return vcard as a download
        return $vcard->download();
    }

    public function pageNotFound()
    {

    }

}
