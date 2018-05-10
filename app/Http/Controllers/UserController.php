<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AttendanceRecord;

use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function attendance(Request $request)
    {
        AttendanceRecord::create([
            'user_name' => Auth::user()->name,
            'status' => 'attendance',
            'reason' => '-',
        ]);
        return redirect('user');
    }

    public function absence(Request $request)
    {
        AttendanceRecord::create([
            'user_name' => Auth::user()->name,
            'status' => 'attendance',
            'reason' => $request->reason,
        ]);
        return redirect('user');
    }
}
