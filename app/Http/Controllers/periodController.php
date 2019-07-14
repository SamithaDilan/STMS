<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\period ;

class periodController extends Controller
{
    public function destroy(Request $request)
    {
        $id = $request -> id ;
        $data = period ::find($id);
        $data -> delete();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $this->validate($request,[

            'period'=> 'required|max:2|min:1',
        ]);


        $id = $request -> id ;
        $data = period ::find($id);
        $data -> period = $request -> period ;
        $data -> save() ;
        // return view('tables/#modal-update') ;
        //return view('LaravelApps/SchoolTimeTable/public/tables/#modal-update') ;
        return redirect()->back();
    }

    public function store(Request $request)
    {
        
        $periods = new period ;
        $periods -> period = $request -> period ;
        $periods -> save() ;
        
        //return view('LaravelApps/SchoolTimeTable/public/tables/modal-form') ;
        return redirect()->back();
    }
}
