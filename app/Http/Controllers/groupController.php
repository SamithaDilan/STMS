<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\group ;

class groupController extends Controller
{
    public function destroy(Request $request)
    {
        $id = $request -> id ;
        $data = group ::find($id);
        $data -> delete();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $this->validate($request,[

            'group'=> 'required|max:6|min:6',
    
    
        ]);


        $id = $request -> id ;
        $data = group ::find($id);
        
        $data -> group = strtoupper($request -> group) ;
        $data -> save() ;
        // return view('tables/#modal-update') ;
        //return view('LaravelApps/SchoolTimeTable/public/tables/#modal-update') ;
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'group'=> 'required|max:6|min:6',
    

        ]);
        

        $grp = new group ;
        $grp -> group = strtoupper($request -> group) ;
        $grp -> save() ;
        
        //return view('LaravelApps/SchoolTimeTable/public/tables/modal-form') ;
        return redirect()->back();
    }
}
