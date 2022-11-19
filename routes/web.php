<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\studentcontroller;

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

Route::get('/',[studentcontroller::class,'welcome']);
Route::get('/studentlist',[studentcontroller::class,'index']);
Route::get('/addstudent',[studentcontroller::class,'addstudent']);
Route::post('/save-student',[studentcontroller::class,'savestudent']);
Route::get('/editstudent/{id}',[studentcontroller::class,'editstudent']);
Route::post('/updatestudent',[studentcontroller::class,'updatestudent']);
Route::get('/delete-student/{id}',[studentcontroller::class,'deletestudent']);
Route::get('/check_contact',[studentcontroller::class,'check_contact']);
Route::get('/check_email',[studentcontroller::class,'check_email']);
