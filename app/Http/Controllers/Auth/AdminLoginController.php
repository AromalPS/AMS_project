<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        // Validate form data
        $this->validate($request,
            [
                'email' => 'required|string|email',
                'password' => 'required|string|min:8',
            ]
        );

        // Attempt to login as admin
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // successful redirect to intended route or admin dashboard
            return redirect()->intended(route('admin.dashboard'));
        }

        //  If unsuccessful redirect back to login page with email and remember fields
        return redirect()->back()->withlogin($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        Return redirect('/');
    }
}
