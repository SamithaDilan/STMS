<?php

namespace App\Http\Controllers;
use DB ;
use App\relief ;

use Illuminate\Http\Request;

class reliefController extends Controller
{
    public function show()
    {
        $reliefs = DB::table('reliefs')->get();
        $teachers = DB::table('teachers')->get();
        $subjects = DB::table('subjects')->get();
        $absents = DB::table('attendances')->where('isPresent', '=', '0' )->get();
        return view('relief',compact('reliefs','absents','teachers','subjects'));
    }

    function fetch(Request $request)
    {
        $value = $request->get('value');
        $dependent = 'teacher_id';
        $period = $request->get('period');
        $id = $request->get('id');

        if($value == 'all' || $value == 'PT')
        {
                $result = DB::table('reliefs')
                ->whereNull($period)
                ->get();
        }
        else
        {
                if($value == 'same' )
                {
                    $teacher =  relief ::find($id);
                    $teacher_id = $teacher->teacher_id;
                    $sames = DB::table('timetables') 
                        ->where('period',$period)
                        ->where('teacher_id',$teacher_id)
                        ->where('day','MON')
                        ->get();
                    foreach($sames as $same)
                    {
                        $value = '$same->sub_id';
                    }


                }

                $teacher = DB::table('teaches')
                ->where('sub_id', $value)
                ->get();
            
                $free_teacher = DB::table('reliefs')
                ->whereNull($period)
                ->get();

                $result = DB::table('teaches')
                ->where('sub_id', $value)
                ->whereNull($period)
                ->join('reliefs', 'reliefs.teacher_id', '=' , 'teaches.teacher_id')
                ->get();
        }
        $output = '<option value="" disabled selected>Select Teacher...</option>';
        foreach($result as $row)
        {
        $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
        }
        echo $output;
    }


    public function reset(Request $request)
    {
        $id = $request->get('id');
        
        $data = relief ::find($id);
        $teacher_id = $data->teacher_id ;

        $subjects = DB::table('timetables')
            ->where('teacher_id', $teacher_id)
            ->where('day', 'MON')
            ->get();

        foreach($subjects as $subject)
        {
            $period = $subject->period ;
            $teacher = $data->$period;
            $selected = explode("-", $teacher);
            $count = count($selected);
            if($count>2)
            {
                DB::table('reliefs')
                ->where('teacher_id',$selected[2])
                    ->update(
                        [$period => null]
                    );
            }

            DB::table('reliefs')
            ->where('teacher_id',$teacher_id)
            ->update(
                [$period => $subject->grade.'-'.$subject->sub_id]
                );
        }


        return redirect()->back();
    }


    public function update(Request $request)
    {
        $this->validate($request,[
            'teacher_id'=> 'required|max:6|min:6'
        ]);


        $id = $request -> id ;
        $grade = $request -> grade ;
        $period = $request -> period ;
        $sub_id = $request -> sub_id ;
        $teacher_id = $request -> teacher_id ;

        if($sub_id == 'all')
        {
            $data = DB::table('teaches')
            ->where('teacher_id', $teacher_id)
            ->first();
            $sub_id = $data->sub_id ;
        }

        $data = relief ::find($id);
        $teacher = $data->$period ;
        $selected = explode("-", $teacher);
        $count = count($selected);
        if($count>2)
        {
            DB::table('reliefs')
            ->where('teacher_id',$selected[2])
                ->update(
                    [$period => null]
                );
        }

        DB::table('reliefs')
                ->where('id',$id)
                ->update(
                    [$period => $grade."-".$sub_id."-".$teacher_id]
                );
        DB::table('reliefs')
            ->where('teacher_id',$teacher_id)
            ->update(
                [$period => "selected"]
                );
        return redirect()->back();
    }
}
