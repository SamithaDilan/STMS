<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\timetable ;
use App\assign ;

class TimetableController extends Controller
{
    public function destroy(Request $request)
    {
        $id = $request -> id ;
        $data = timetable ::find($id);
        $data -> delete();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $this->validate($request,[

            'day'=> 'required|max:3|min:3',
            'period'=> 'required|max:2|min:1',
            'grade'=> 'required|max:3|min:2',
            'sub_id'=> 'required|max:6|min:1',
            'teacher_id'=> 'required|max:6|min:6'
        ]);


        $id = $request -> id ;
        $data = timetable ::find($id);
        $data -> day = strtoupper($request -> day) ;
        $data -> grade = strtoupper($request ->grade) ;
        $data -> period = $request -> period ;
        $data -> sub_id = strtoupper($request -> sub_id) ;
        $data -> teacher_id = strtoupper($request -> teacher_id );
        $data -> save() ;
        // return view('tables/#modal-update') ;
        //return view('LaravelApps/SchoolTimeTable/public/tables/#modal-update') ;
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'day'=> 'required|max:3|min:3',
            'period'=> 'required|max:2|min:1',
            'grade'=> 'required|max:3|min:2',
            'sub_id'=> 'required|max:6|min:1',
            'teacher_id'=> 'required|max:6|min:6'
        ]);
        

        $timetables = new timetable ;
        $timetables -> day = strtoupper($request -> day);
        $timetables -> grade = strtoupper($request -> grade) ;
        $timetables -> period = $request -> period ;
        $timetables -> sub_id = strtoupper($request -> sub_id) ;
        $timetables -> teacher_id = strtoupper($request -> teacher_id );
        $timetables -> save() ;

        // $id = $request -> teacher_id ;
        // $period = $request -> period ;
        // $data = assign ::find($id);
        // $data -> {$request -> period} = 1 ;
        
        //return view('LaravelApps/SchoolTimeTable/public/tables/modal-form') ;
        return redirect()->back();
    }
}
