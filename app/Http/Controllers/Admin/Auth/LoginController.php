<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('admin.auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|string|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            alert()->success("St Aloysius College (Autonomous)","Welcome to ".config('app.name'));
            return redirect()->route("admin.home");

        }else{
           //wrong email or password
           alert()->error('Invalid Credentials');
           //redirect back to login
           return redirect()->route('admin.login.show')
               ->withInput($request->only('email', 'remember'));
        }

    }
}
