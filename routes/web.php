<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\admin\staffsController;
use App\Http\Controllers\admin\studentsController;
use App\Http\Controllers\admin\attendenceController;
use App\Http\Controllers\admin\resultController;
use App\Http\Controllers\admin\StartAdmissionController;
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

// Route::view('/','home');
Route::view('/at_a_glance','at_a_glance');
Route::view('/history','history');
Route::view('/gallary','gallary');

Route::get('/',[frontendController::class ,'home']);
Route::get('/teacher',[frontendController::class ,'teacher']);
Route::get('/student_at_a_glance',[frontendController::class ,'student_at_a_glance']);
Route::get('/student_list',[frontendController::class ,'student_list']);
Route::get('/total_student',[frontendController::class ,'total_student']);
Route::get('/public_result',[frontendController::class ,'public_result']);
Route::get('/result',[frontendController::class ,'result']);
Route::get('/view_result',[frontendController::class ,'view_result']);
Route::get('/weakly_result',[frontendController::class ,'weakly_result']);
Route::get('/weakly_result_data',[frontendController::class ,'weakly_result_data']);


Route::get('/admissionOnlineForm',[frontendController::class ,'admissionOnlineForm']);
Route::post('/Admission_checkout',[frontendController::class ,'Admission_checkout']);
Route::post('/Admission_success',[frontendController::class ,'Admission_success']);
Route::get('/check_availability/{nid}',[frontendController::class ,'check_availability']);
Route::get('/check_availabilitytrx/{trx}',[frontendController::class ,'check_availabilitytrx']);
Route::get('/admit/{addId}',[frontendController::class ,'admit']);




Route::get('/teacher/login',[AuthController::class , 'loginTemplate']);
Route::post('login/submit', [AuthController::class, 'login_submit'])->name('login_submit');





Route::get('Adminregister', [AuthController::class, 'register'])->name('register');
Route::post('register_submit', [AuthController::class, 'register_submit'])->name('register_submit');

Route::get('/logout', [AuthController::class, 'signOut'])->name('signout');


Route::group(['middleware'=>['adminAuth']],function(){


//school
Route::group(['prefix'=>'school'],function(){
    Route::get('/',[AuthController::class , 'dashboard']);


    //staffsController
    Route::get('/staffs',[staffsController::class , 'list']);
    Route::get('/staffs/form',[staffsController::class , 'add']);
    Route::post('/staffs/form/submit',[staffsController::class , 'staffs_submit']);
    Route::get('/staffs/view/{id}',[staffsController::class , 'staffs_view']);
    Route::get('/staffs/edit/{id}',[staffsController::class , 'edit']);
    Route::get('/staffs/action/{type}/{id}',[staffsController::class , 'staffs_action']);
    Route::post('/staffs/image/upload',[staffsController::class , 'staffs_image']);







    //studentsController
    Route::get('/students/{status}/list',[studentsController::class , 'list']);
    Route::get('/students/{status}/edit/{id}',[studentsController::class , 'edit']);
    Route::get('/students/form',[studentsController::class , 'add']);
    Route::post('/students/form/submit',[studentsController::class , 'student_submit']);
    Route::post('/student/check',[studentsController::class , 'student_check']);
    Route::get('/student/view/{id}',[studentsController::class , 'student_view']);
    Route::get('/student/action/{type}/{id}',[studentsController::class , 'student_action']);
    Route::post('/students/search',[studentsController::class , 'student_search']);
    Route::post('/students/image/upload',[studentsController::class , 'student_image']);
    Route::get('/students/{status}/{class}/list',[studentsController::class , 'Search_list']);



    Route::get('/students/transfer/in',[studentsController::class , 'transfer_in_list']);
    Route::get('/students/transfer/out',[studentsController::class , 'transfer_out_list']);
    Route::get('/students/aplication',[studentsController::class , 'aplication_list']);


    //attendence_sheet
    Route::get('/attendence_sheet',[attendenceController::class , 'attendence_sheet']);
    Route::get('/attendence_sheet/{class}/{view}/{date}',[attendenceController::class , 'attendence_sheet_result']);
    Route::post('/attendence_sheet/search',[attendenceController::class , 'attendence_sheet_search']);
    Route::post('/attendence_sheet/submit',[attendenceController::class , 'attendence_sheet_submit']);
    Route::get('/attendence_sheet/edit/{id}',[attendenceController::class , 'attendence_sheet_edit']);
    Route::post('/attendence_sheet/edit/submit',[attendenceController::class , 'attendence_sheet_edit_submit']);



    //resultController
    Route::get('/result_sheet',[resultController::class , 'result_sheet']);
    Route::get('/result_sheet/{group}/{class}/{exam}/{subject}/{date}',[resultController::class , 'result_sheet_result']);
    Route::get('/result_sheet/view/{class}/{exam}/All/{date}',[resultController::class , 'resultView']);
    Route::post('/result_sheet/search',[resultController::class , 'result_sheet_search']);
    Route::post('/result_sheet/submit',[resultController::class , 'result_sheet_submit']);
    Route::get('/result_sheet/edit/{id}',[resultController::class , 'result_sheet_edit']);
    Route::post('/result_sheet/edit/submit',[resultController::class , 'result_sheet_edit_submit']);
    Route::post('/result/publish',[resultController::class , 'result_publish']);



    //StartAdmission
    Route::get('/StartAdmission',[StartAdmissionController::class , 'StartAdmission_sheet']);
    Route::get('/form/AdmissionDateSet',[StartAdmissionController::class , 'AdmissionDateSet']);
    Route::get('/form/AdmissionDateSet/{id}',[StartAdmissionController::class , 'AdmissionDateEdit']);
    Route::get('/form/AdmissionDateDelete/{id}',[StartAdmissionController::class , 'AdmissionDateDelete']);
    Route::post('/form/AdmissionDateSet/submit',[StartAdmissionController::class , 'AdmissionDateSet_submit']);



});

});