<?php

namespace App\Http\Middleware;
use App\Contact;
use Closure;
use Illuminate\Support\Facades\Auth;

class MyAuth
{
    /**
     * Handle an incoming request.
     *
     * makes sure that no user can access/modify another user's data
     */
    public function handle($request, Closure $next)
    {
        //die(request()->segment(2));
        $id = request()->segment(2); // For example, the current URL is: /posts/1/edit
        $contact = Contact::findOrFail($id); // Fetch the post
        if($contact->user_id == Auth::user()->id)
        {
            return $next($request); // They're the owner, lets continue...
        }
        return redirect()->to('/notfound'); // Nope! Get outta' here.
    }
}
