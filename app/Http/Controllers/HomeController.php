<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AttendanceRecord;
use Auth;
use DB;

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
        $record = DB::table('users')
        ->select('users.name','users.email','attendance_records.id','attendance_records.created_at', 'attendance_records.roll_call', 'attendance_records.ab_reason')
        ->join('attendance_records','attendance_records.users_id','=','users.id')
        ->get();
        return view('admin.index', compact('record'));
    }

    public function user()
    {
        $user = Auth::user()->id;
        $atts = AttendanceRecord::where('users_id', $user)->get();
        return view('user.index', compact('atts'));
    }
}
