<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB ;
use App\timetable ;

class viewController extends Controller
{
    public function show()
    {
        // $id = $request -> id ;
        // $data = teacher ::find($id);
        $grades = DB::table('grades')->get();
        $grades1 = '6A';
        $timetables = DB::table('timetables')->where('grade', '=', '6A' )->get();
        // $users2 = DB::table('attendances')->where('teacher_id', '=', $data ->teacher_id )->delete();
        // $data -> delete();
        // return redirect()->back();
        return view('index',compact('timetables','grades','grades1'));
    }
    public function update(Request $request)
    {
        $id = $request ->grade ;
        $grades1 = $id;
        $grades = DB::table('grades')->get();
        $timetables = DB::table('timetables')->where('grade', '=', $id )->get();
        // $data = teacher ::find($id);
        // $users = DB::table('timetables')->where('teacher_id', '=', $data ->teacher_id )->delete();
        // $users1 = DB::table('teaches')->where('teacher_id', '=', $data ->teacher_id )->delete();
        // $users2 = DB::table('attendances')->where('teacher_id', '=', $data ->teacher_id )->delete();
        // $data -> delete();
        // return redirect()->back();
        return view('index',compact('timetables','grades','grades1'));
    }
}
