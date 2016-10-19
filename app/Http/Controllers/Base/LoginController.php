<?php

namespace App\Http\Controllers\Base;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests;
use App\Account;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        if(Auth::user()){
            if(Auth::user()->account_type_id == 1) {
                return redirect('cashier/dashboard');
            } else {
                return redirect('client/dashboard');
            }
        }

        $data['title'] = "Login";
        return view('base.login.index', $data);
    }

    public function authenticate(Request $request) {
        if ( Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]) ) {
            if(Auth::user()->account_type_id == 1) {
                return redirect('cashier/dashboard');
            } else {
                return redirect('client/dashboard');
            }
        }

        return redirect('login')->with('status', 'Invalid Login Credentials');
    }

    public function logout(Request $request) {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/');
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
