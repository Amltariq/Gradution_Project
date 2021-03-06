<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Front')->group(function(){

    Route::get('/', 'HomePageController@index')->name('front.homepage');
    Route::post('/message/contact','MessageController@contact')->name('front.message.contact');
// student home
Route::get('/student/show', 'StudentController@studentshow')->name('student.show');
//student card
Route::get('/student/card', 'StudentController@studentcard')->name('student.card');
Route::post('/student/cardform', 'StudentController@cardform')->name('student.cardform');
// student news
Route::get('/student/news', 'StudentController@studentnews')->name('student.news');
Route::get('/student/table', 'StudentController@studenttable')->name('student.table');
Route::get('/student/payment', 'StudentController@studentpayment')->name('student.payment');
Route::get('/student/care', 'StudentController@studentcare')->name('student.care');
Route::get('/student/desires', 'StudentController@studentdesires')->name('student.desires');
Route::get('/student/email', 'StudentController@studentemail')->name('student.email');
//complaints
Route::get('/student/complaints', 'StudentController@studentcomplaints')->name('student.complaints');
Route::post('/student/complaintsForms', 'StudentController@complaintsForms')->name('student.complaintsForms');


});

Route::namespace('Admin')->group(function(){
    //employee login
Route::get('/employee/home','EmployeeController@empHome')->name('emp.home');
Route::get('/employee/view','EmployeeController@viewEmp')->name('emp.view');

});