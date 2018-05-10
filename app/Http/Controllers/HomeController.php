<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AttendanceRecord;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $record = AttendanceRecord::all();
        return view('admin.index', compact('record'));
    }

    public function user()
    {
        return view('user/index');
    }
}
