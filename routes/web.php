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

Route::get('/', function () {
    return view('auth.register');
});


Route::get('/master', function (){
    $user_details=DB::table('users')->get();
    $loan_details=DB::table('loan__details')->get();
    $personal_details=DB::table('personal__details')->get();
    $financial_details=DB::table('financial__details')->get();
    return view('masterDashboard',compact('user_details','loan_details','personal_details','financial_details'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/step1','ApplicationsController@step1_index')->middleware('auth'); //loan details
Route::post('/step1','ApplicationsController@step1_store'); //loan details

Route::get('/step2','ApplicationsController@step2_index')->middleware('auth'); //Personal details
Route::post('/step2','ApplicationsController@step2_store'); //Personal details

Route::get('/step3','ApplicationsController@step3_index')->middleware('auth'); //Employer and Education details
Route::post('/step3','ApplicationsController@step3_store'); //Employer and Education details

Route::get('/step4','ApplicationsController@step4_index'); //Financial details
Route::post('/step4','ApplicationsController@step4_store'); //Financial details

