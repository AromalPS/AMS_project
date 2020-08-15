<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:teacher' );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('/teacher', ['users'=> $users]);
    }

    public function ShowClass(Request $request)
    {
        $shows = User::all()->where('class','=',$request ->class)
            ->where('year','=',$request -> year);
        $class = $request->class;
        $year = $request->year;
        return view('class', compact('shows', 'class', 'year'));
    }

    public function RemoveStudent(User $show)
    {
        $show->delete();
        return back();
    }
}
