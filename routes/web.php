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

//基礎路由參數：單個參數
Route::get('student/{student_no}', function ($student_no) {
    return "學號：".$student_no;
});
