<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\subject ;

class subjectController extends Controller
{
    public function destroy(Request $request)
    {
        $id = $request -> id ;
        $data = subject ::find($id);
        $data -> delete();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $this->validate($request,[

            'sub_code'=> 'required',
            'sub_name'=> 'required'
    
        ]);


        $id = $request -> id ;
        $data = subject ::find($id);
        
        $data -> sub_name = $request -> sub_name ;
        $data -> sub_code = strtoupper($request -> sub_code) ;
        $data -> save() ;
        // return view('tables/#modal-update') ;
        //return view('LaravelApps/SchoolTimeTable/public/tables/#modal-update') ;
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'sub_code'=> 'required',
            'sub_name'=> 'required'
    

        ]);
        

       
        $subjects = new subject ;
        $subjects -> sub_name = $request -> sub_name ;
        $subjects -> sub_code = strtoupper($request -> sub_code) ;
        $subjects -> save() ;
        
        //return view('LaravelApps/SchoolTimeTable/public/tables/modal-form') ;
        return redirect()->back();
    }
}
