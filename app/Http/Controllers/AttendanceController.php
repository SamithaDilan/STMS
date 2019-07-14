<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\attendance ;
use App\relief ;
use DB ;

class AttendanceController extends Controller
{
    public function updatePresent($id)
    {
        $data = attendance ::find($id);
        $data -> isPresent = 0 ;
        $data -> save() ;
        return redirect()->back();
    }


    public function updateAbsent($id)
    {
        $data = attendance ::find($id);
        $teachers = DB::table('reliefs')
        ->where('teacher_id', $data->teacher_id)
        ->first();
        for ($x = 1; $x <= 8; $x++)
        {
            if($teachers->$x <> null)
            {
                $teacher = explode("-", $teachers->$x);
                $count = count($teacher);
                if($count>2)
                {
                    DB::table('reliefs')
                    ->where('teacher_id',$teacher[2])
                    ->update(
                        [$x => null]
                    );
                }
            }
        }


        $reliefs = DB::table('timetables')
        ->where('teacher_id', $data->teacher_id)
        ->where('day', 'MON')
        ->get();

        foreach($reliefs as $relief)
        {
            DB::table('reliefs')
            ->where('teacher_id',$relief->teacher_id)
            ->update(
                [$relief->period => $relief->grade."-".$relief->sub_id]
            );
        }

        $data -> isPresent = 1 ;
        $data -> save() ;
        return redirect()->back();
    }
}
