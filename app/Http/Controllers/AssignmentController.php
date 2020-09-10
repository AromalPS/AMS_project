<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        return view('assignment');
    }

    public function addassignment(Request $request)
    {
        Assignment::create([
            'Assigned_by' => $request->assigned_by,
            'assigned_class' => $request->assigned_class,
            'assigned_year' => $request->assigned_year,
            'last_date_of_submission' => $request->last_day,
            'Maximum_mark' => $request->mark,
            'Question' => $request->question,
            'subject' => $request->subject,
        ]);
//        dd($request);
        return view('teacher');
    }
}
