<?php
namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Auth;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('contact.owner');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::where('user_id',Auth::user()->id)->paginate(2);
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
        /*check whether the email address for the contact is unique*/
        //$user = Auth::user();
        //$emails=Contact::select('email')->where('user_id',$user->id)->get();
        //var_dump($emails);die();

        try{
            Contact::create($request->all());
            return redirect()->route('contact.index')->with('message','The contact has been added successfully!');
        }
        catch(QueryException $e){
            $error_code = $e->errorInfo[1];
            if($error_code == 1062){
                //self::destroy($request);
                return redirect()->route('contact.index')->with('error','The contact cannot be added, duplicate record found!');
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
        //$dob = Contact::select('dob')->where('id',$contact->id)->get();
        //$dob = Contact::getAge();
        //$dob = new Carbon($dob);
//        $now = new Carbon();
//        $age = $dob->diffInYears($now);
        //$howOldAmI = Carbon::createFromDate($dob)->age;
        //var_dump($dob); die();
        //$age = new Contact();
        //$age = $age()->getAge();
        return view('contacts.show',compact('contact'));
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
}
