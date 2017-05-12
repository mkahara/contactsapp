<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
use App\Contact;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user-home');
    }

    public function trash()
    {
        $contacts = Contact::onlyTrashed()->where('user_id',Auth::user()->id)->paginate(2);
        return view('contacts/trash',compact('contacts'));
    }
    public function restore($id)
    {
        $contacts = Contact::withTrashed()->find($id)->restore();
        return redirect ('contact')->with('message','The contact has been Restored!');
    }
}
