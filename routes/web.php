<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     $data = App\timetable :: all() ;
//         return view('index') -> with('timetables',$data);
// });

Route::get('/top-menu', function () {
    return view('top-menu');
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/form-elements-2', function () {
    return view('form-elements-2');
});

Route::get('/form-elements', function () {
    return view('form-elements');
});

Route::get('/jqgrid', function () {
    return view('jqgrid');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/mobile-menu-3', function () {
    return view('mobile-menu-3');
});

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/search', function () {
    return view('search');
});

Route::get('/tables', function () {
    $data = App\timetable :: all() ;
    $data1 = App\teacher :: all() ;
    $data2 = App\subject :: all() ;
    $data3 = App\period :: all() ;
    $data4 = App\grade :: all() ;
        return view('tables') -> with('timetables',$data) -> with('teachers',$data1) -> with('subjects',$data2) -> with('periods',$data3) -> with('grades',$data4);
});

Route::get('/period', function () {
    $data = App\period :: all() ;
        return view('period') -> with('periods',$data);
});

Route::get('/teachers', function () {
    $data = App\teacher :: all() ;
        return view('teachers') -> with('teachers',$data);
});


Route::get('/attendance', function () {
    $data = App\attendance :: all() ;
        return view('attendance') -> with('teachers',$data);
});

Route::get('/subjects', function () {
    $data = App\subject :: all() ;
        return view('subjects') -> with('subjects',$data);
});

Route::get('/teaches', function () {
    $data = App\teacher :: all() ;
    $data1 = App\subject :: all() ;
    $data2 = App\teaches :: all() ;
        return view('teaches') -> with('teachers',$data) -> with('subjects',$data1) -> with('teaches',$data2);
});

Route::get('/group', function () {
    $data = App\group :: all() ;
        return view('group') -> with('groups',$data);
});

Route::get('/groupSub', function () {
    $data = App\timetable :: all() ;
    $data1 = App\teacher :: all() ;
    $data2 = App\subject :: all() ;
    $data3 = App\period :: all() ;
    $data4 = App\grade :: all() ;
        return view('groupSub') -> with('timetables',$data) -> with('teachers',$data1) -> with('subjects',$data2) -> with('periods',$data3) -> with('grades',$data4);
});


Route::get('/grade', function () {
    $dataGrade = App\grade :: all() ;
        return view('grade') -> with('grades',$dataGrade);
});

Route::get('/grade6', function () {
    $data = App\timetable :: all() ;
    $data1 = App\subject :: all() ;
        return view('grade6') -> with('timetables',$data) -> with('subjects',$data1);
});


Route::get('/top-menu-1', function () {
    return view('top-menu-1');
});

Route::get('/markpresent/{id}','AttendanceController@updatePresent')->name('present');
Route::get('/markabsent/{id}', 'AttendanceController@updateAbsent')->name('absent');



Route::get('ajaxdata/massremove', 'AjaxdataController@massremove')->name('ajaxdata.massremove');

Route::post('/savetimetable', ['uses' => 'TimetableController@store','as'=>'sign']);
Route::post('/updateTimetable', ['uses' => 'TimetableController@update','as'=>'update']);
Route::post('/destroy', ['uses' => 'TimetableController@destroy','as'=>'destroy']);



Route::post('/saveGrade', ['uses' => 'gradeController@store','as'=>'saveGrade']);
Route::post('/updateGrade', ['uses' => 'gradeController@update','as'=>'updateGrade']);
Route::post('/destroyGrade', ['uses' => 'gradeController@destroy','as'=>'destroyGrade']);




Route::post('/saveTeacher', ['uses' => 'teacherController@store','as'=>'saveTeacher']);
Route::post('/updateTeacher', ['uses' => 'teacherController@update','as'=>'updateTeacher']);
Route::post('/destroyTeacher', ['uses' => 'teacherController@destroy','as'=>'destroyTeacher']);



Route::post('/savePeriod', ['uses' => 'periodController@store','as'=>'savePeriod']);
Route::post('/updatePeriod', ['uses' => 'periodController@update','as'=>'updatePeriod']);
Route::post('/destroyPeriod', ['uses' => 'periodController@destroy','as'=>'destroyPeriod']);



Route::post('/saveGroup', ['uses' => 'groupController@store','as'=>'saveGroup']);
Route::post('/updateGroup', ['uses' => 'groupController@update','as'=>'updateGroup']);
Route::post('/destroyGroup', ['uses' => 'groupController@destroy','as'=>'destroyGroup']);



Route::post('/saveSubject', ['uses' => 'subjectController@store','as'=>'saveSubject']);
Route::post('/updateSubject', ['uses' => 'subjectController@update','as'=>'updateSubject']);
Route::post('/destroySubject', ['uses' => 'subjectController@destroy','as'=>'destroySubject']);


Route::post('/saveTeaches', ['uses' => 'teachesController@store','as'=>'saveTeaches']);
Route::post('/updateTeaches', ['uses' => 'teachesController@update','as'=>'updateTeaches']);
Route::post('/destroyTeaches', ['uses' => 'teachesController@destroy','as'=>'destroyTeaches']);



Route::get('/', 'viewController@show');
Route::get('/index', 'viewController@show');
Route::post('/viewTimetable',['uses' => 'viewController@update','as'=>'updateIndex']);


Route::get('/relief', 'reliefController@show');
Route::post('relief/fetch', 'reliefController@fetch')->name('relief.fetch');
Route::post('/updateRelief', ['uses' => 'reliefController@update','as'=>'updateRelief']);
Route::post('/resetRelief', ['uses' => 'reliefController@reset','as'=>'resetRelief']);

