<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\groupsub ;

class groupSubjectController extends Controller
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
        $data -> day = $request -> day ;
        $data -> grade = $request -> grade ;
        $data -> period = $request -> period ;
        $data -> sub_id = $request -> sub_id ;
        $data -> teacher_id = $request -> teacher_id ;
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
        $timetables -> day = $request -> day ;
        $timetables -> grade = $request -> grade ;
        $timetables -> period = $request -> period ;
        $timetables -> sub_id = $request -> sub_id ;
        $timetables -> teacher_id = $request -> teacher_id ;
        $timetables -> save() ;
        
        //return view('LaravelApps/SchoolTimeTable/public/tables/modal-form') ;
        return redirect()->back();
    }
    public function regencies(){
        //$provinces_id = Input::get('teacher');
        $subjects = Teaches::where('teacher_id', '=', 'TEA006')->get();
        return response()->json($subjects);
      }
}
