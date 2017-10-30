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


Route::get('/',function(){
    return view('welcome');
});

Route::get('/','HomeController@index');


Route::group(['prefix'=>'student'],function(){

    Route::get('{student_no}',[
        'as'=>'student',
        'uses'=>'StudentController@getStudentData'
    ]);

    Route::get('{student_no}/score/{subject?}',[
        'as'=>'student.score',
        'uses'=>'StudentController@getStudentScore'
    ])->where(['subject'=>'(chinese | english | math)']);

});

Route::group(['namespace'=>'Cool'],function(){

Route::get('cool','Cool\TestController@index');
});


Route::get('/board','BoardController@getIndex');

Route::get('/score','StudentController@getStudentScore');