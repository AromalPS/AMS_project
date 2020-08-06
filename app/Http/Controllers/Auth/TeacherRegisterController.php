<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TeacherRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showRegistrationForm()
    {
        return view('auth.teacher-register');
    }

    public function register(Request $request)
    {
        // Validate form data
        $this->validate($request,
            [
                'name' =>['required', 'string', 'max:255'],
                'email' =>['required', 'string', 'email', 'max:255', 'unique:teachers'],
                'subject' =>['required'],
                'password' =>['required', 'string', 'min:8']
            ]
        );

        // Create teacher user
        try {
            $teacher = Teacher::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'password' => Hash::make($request->password),
            ]);

            // Log the teacher in
            Auth::guard('teacher')->LoginUsingId($teacher->id);
            return redirect()->route('teacher.dashboard');
        } catch (\Exception $e) {
            return redirect()->back()->withInput($request->only('name', 'email'));
        }
    }
}
