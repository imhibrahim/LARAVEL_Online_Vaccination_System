<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Covid_testController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\patientController;
use App\Http\Controllers\PatientreportController;
use App\Http\Controllers\VaccineController;
use Illuminate\Support\Facades\Route;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//web site routes
Route::get('/',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about'])->middleware('login');
Route::get('/symptoms',[HomeController::class,'symptoms'])->middleware('login');
Route::get('/prevention',[HomeController::class,'prevention'])->middleware('login');
Route::get('/blog',[HomeController::class,'blog'])->middleware('login');
Route::get('/faq',[HomeController::class,'faq'])->middleware('login');
Route::get('/contact',[HomeController::class,'contact'])->middleware('login');
Route::get('/pages/hospital',[HomeController::class,'hospitals'])->middleware('login');
Route::get('/pages/hospital/detailes/{id}',[HomeController::class,'hospitaldetails']);
Route::get('/pages/track',[HomeController::class,'trackreport']);
Route::post('/trackstore',[HomeController::class,'trackstore']);
Route::post('/report',[HomeController::class,'report']);
Route::get('/pages/commingsoon',[HomeController::class,'comming'])->middleware('login');


Route::get('/dashboard',[DashboardController::class,'index'])->middleware('dashboard');




// doctors routs 
Route::get('/dashboard/doctor',[DoctorController::class,'doctors'])->middleware('dashboard');
Route::get('/dashboard/doctor/adddoctor',[DoctorController::class,'adddoctor'])->middleware('dashboard');
Route::post('/dashboard/storedoctor',[DoctorController::class,'storedoctor'])->middleware('dashboard');
Route::get('/dashboard/editdoctor/{id}',[DoctorController::class,'editdoctor'])->middleware('dashboard');
Route::post('/dashboard/updatedoctor/{id}',[DoctorController::class,'updatedoctor'])->middleware('dashboard');
Route::get('/dashboard/delete doctor/{id}',[DoctorController::class,'deletedoctor'])->middleware('dashboard');

// hospital routs
Route::get('/dashboard/hospital',[HospitalController::class,'hospitals'])->middleware('dashboard');
Route::get('/dashboard/hospital/addhospital',[HospitalController::class,'addhospital'])->middleware('dashboard');
Route::post('/dashboard/storehospital',[HospitalController::class,'storehospital'])->middleware('dashboard');
Route::get('/dashboard/edithospital/{id}',[HospitalController::class,'edithospital'])->middleware('dashboard');
Route::post('/dashboard/updatehospital/{id}',[HospitalController::class,'updatehospital'])->middleware('dashboard');
Route::get('/dashboard/deletehospital/{id}',[HospitalController::class,'deletehospital'])->middleware('dashboard');


// vaccine routs
Route::get('/dashboard/vaccine',[vaccineController::class,'vaccines'])->middleware('dashboard');
Route::get('/dashboard/vaccine/addvaccine',[vaccineController::class,'addvaccine'])->middleware('dashboard');
Route::post('/dashboard/storevaccine',[vaccineController::class,'storevaccine'])->middleware('dashboard');
Route::get('/dashboard/editvaccine/{id}',[vaccineController::class,'editvaccine'])->middleware('dashboard');
Route::post('/dashboard/updatevaccine/{id}',[vaccineController::class,'updatevaccine'])->middleware('dashboard');
Route::get('/dashboard/delete vaccine/{id}',[vaccineController::class,'deletevaccine'])->middleware('dashboard');



//oppointment routes
Route::get('/dashboard/appointmentlist',[AppointmentController::class,'appointmentlist'])->middleware('dashboard');
Route::get('/pages/hospital/addappointment',[AppointmentController::class,'addappointment']);
Route::post('/pages/hospital/appointmentstore',[AppointmentController::class,'storeappointment']);
Route::get('/dashboard/deleteappointment/{id}',[AppointmentController::class,'deleteappointment'])->middleware('dashboard');

//user route

Route::get('/dashboard/user',[HomeController::class,'user'])->middleware('dashboard');
Route::get('/dashboard/delete user/{id}',[HomeController::class,'deleteuser'])->middleware('dashboard');
Route::get('/register',[HomeController::class,'register']);
Route::post('/registerstore',[HomeController::class,'registerstore']);

Route::get('/login',[HomeController::class,'login']);
Route::post('/loginstore',[HomeController::class,'loginstore']);
Route::get('/logout',[HomeController::class,'logout']);

//patient test route

Route::get('/dashboard/patient test',[Covid_testController::class,'patienttest'])->middleware('dashboard');
Route::get('/dashboard/deletepatienttest/{id}',[Covid_testController::class,'deletepatienttest'])->middleware('dashboard');

//patient roport route

Route::get('/dashboard/patient report',[PatientreportController::class,'patientreport'])->middleware('dashboard');
Route::get('/dashboard/deletepatientreport/{id}',[PatientreportController::class,'deletepatientreport'])->middleware('dashboard');

Route::get('/pages/hospitalregister',[HomeController::class,'addhospitalreg'])->middleware('login');
Route::post('/pages/storehospital',[HomeController::class,'storehospitalreg'])->middleware('login');