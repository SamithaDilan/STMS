<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\grade ;

class gradeController extends Controller
{
    public function destroy(Request $request)
    {
        $id = $request -> id ;
        $data = grade ::find($id);
        $data -> delete();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $this->validate($request,[

            'grade_id'=> 'required|max:3|min:2'
        ]);


        $id = $request -> id ;
        $data = grade ::find($id);
        $data -> Grade_code = strtoupper( $request -> grade_id ) ;
        $data -> save() ;
        // return view('tables/#modal-update') ;
        //return view('LaravelApps/SchoolTimeTable/public/tables/#modal-update') ;
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'Grade_code'=> 'required|max:3|min:2'
        ]);
        

        $grades = new grade ;
        $grades -> Grade_code =  strtoupper($request -> Grade_code);
        $grades -> save() ;
        
        //return view('LaravelApps/SchoolTimeTable/public/tables/modal-form') ;
        return redirect()->back();
    }
}
