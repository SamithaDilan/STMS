<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB ;
use App\grade ;
use App\relief ;
use App\timetable ;
class reliefDemo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'relief:demo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::table('reliefs')->delete();
        DB::table('attendances')->update(['isPresent' => '1']);
        $allTeachers = DB::table('teachers')->get() ;
        $date = date('d-m-Y');
        $nameOfDay = date('D', strtotime($date));
        $nameOfDay = strtoupper($nameOfDay);
        foreach($allTeachers as $allTeacher)
        {
            $teacher = new relief ;
            $teacher -> teacher_id = $allTeacher -> teacher_id ;
            $teacher -> save() ;
        }
        $timetables = DB::table('timetables')->get() ;
        foreach($timetables as $timetable)
        {
            if($timetable -> day == 'MON')
            {
                $id = $timetable -> teacher_id ;
                $prid = $timetable -> period ;
                DB::table('reliefs')
                ->where('teacher_id',$id)
                ->update(
                    [$prid => $timetable->grade."-".$timetable->sub_id]
                );
            }
            
        }
    } 
    
}
