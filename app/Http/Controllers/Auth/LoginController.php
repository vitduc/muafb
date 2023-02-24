<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login()
    {
        return view('frontend.login');
    }
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postLogin(LoginRequest $request)
    {
        $data = $request->except('_token');


        $credentials = [
            'email' => $data['email'],
            'password' => $data['password'],
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user()->admin == 1 )
            {
                return redirect()->route('dashboard');
            }
            return redirect()->route('home');
        } else {
            return redirect()->route('login')
                ->with('message', 'The username or password is incorrect. Try again')
                ->with('type_alert', "danger");
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
