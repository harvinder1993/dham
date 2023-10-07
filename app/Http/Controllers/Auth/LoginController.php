<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){   
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
            if (auth()->user()->type == 'admin') {
                return redirect()->route('admin.index');
            }else if (auth()->user()->type == 'organization') {
                return redirect()->route('organization.index');
            }else if (auth()->user()->type == 'helping-center') {
                return redirect()->route('helpingcenter.index');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')->with('error','Email-Address And Password Are Wrong.');
        } 

    }
}
