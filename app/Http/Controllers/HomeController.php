<?php

namespace App\Http\Controllers;

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

    public function template()
    {
        return view('custompage');
    }

    public function dashboard(){
        return view('admin-home');
    }

    public function doLogout(Request $request)
    {
        Auth::logout(); // log the user out of our application
        return redirect('login'); // redirect the user to the login screen
    }
}
