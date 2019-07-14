<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\teaches ;
use App\teacher ;
use App\timetable ;
use DB ;

class teachesController extends Controller
{
    public function destroy(Request $request)
    {
        $id = $request -> id ;
        $data = teaches ::find($id);
        $data -> delete();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $this->validate($request,[

            'teacher_id'=> 'required|max:6|min:6',
            'sub_id'=> 'required|max:6|min:1',
        ]);


        $id = $request -> id ;
        $data = teaches ::find($id);
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

            'sub_id'=> 'required|max:6|min:1',
            'teacher_id'=> 'required|max:6|min:6'
        ]);
        

        $teaches1 = new teaches ;
        $teaches1 -> sub_id = $request -> sub_id ;
        $teaches1 -> teacher_id = $request -> teacher_id ;
        $teaches1 -> save() ;
        
        //return view('LaravelApps/SchoolTimeTable/public/tables/modal-form') ;
        return redirect()->back();
    }
}
