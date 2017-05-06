<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Socialite;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';
    protected function authenticated(Request $request, $user)
    {
        if($user->user_type == '0') {
            return redirect('/dashboard');
        }

        return redirect('/home');
    }


    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /*facebook login methods*/
    public function redirectToProvider(){
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback(){
        try{
            $user = Socialite::driver('facebook')->user();
        } catch(Exception $e){
            return redirect('auth/facebook');
        }
        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser,true);

        return redirect('/home');
    }

    private function findOrCreateUser($facebookUser){
        $authUser = User::where('email', $facebookUser->email)->first();
        if($authUser){
            return $authUser;
        }
        return User::create([
           'name'=>$facebookUser->name,
            'email'=>$facebookUser->email,
            'facebook_id'=>$facebookUser->id,
            'avatar'=>$facebookUser->avatar
        ]);
    }
}
