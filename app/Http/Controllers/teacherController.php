<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\teacher ;
use App\attendance ;
use DB ;

class teacherController extends Controller
{
    public function destroy(Request $request)
    {
        $id = $request -> id ;
        $data = teacher ::find($id);
        $users = DB::table('timetables')->where('teacher_id', '=', $data ->teacher_id )->delete();
        $users1 = DB::table('teaches')->where('teacher_id', '=', $data ->teacher_id )->delete();
        $users2 = DB::table('attendances')->where('teacher_id', '=', $data ->teacher_id )->delete();
        $data -> delete();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $this->validate($request,[

            'teacher_id'=> 'required|max:6|min:6',
            'teacher_name'=> 'required'
    
        ]);


        $id = $request -> id ;
        $data = teacher ::find($id);
        
        $data -> teacher_name = $request -> teacher_name ;
        $data -> teacher_id = strtoupper($request -> teacher_id) ;
        $data -> save() ;
        // return view('tables/#modal-update') ;
        //return view('LaravelApps/SchoolTimeTable/public/tables/#modal-update') ;
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'teacher_id'=> 'required|max:6|min:6',
            'teacher_name'=> 'required'
    

        ]);
        

        $teachers = new teacher ;
        $teachers1 = new attendance ;
        
        $teachers -> teacher_name = $request -> teacher_name ;
        $teachers -> teacher_id = strtoupper($request -> teacher_id) ;
        $teachers1 -> teacher_id = strtoupper($request -> teacher_id) ;
        $teachers -> save() ;
        $teachers1 -> save() ;
        
        //return view('LaravelApps/SchoolTimeTable/public/tables/modal-form') ;
        return redirect()->back();
    }
}
