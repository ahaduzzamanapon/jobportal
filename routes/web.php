<?php

use App\Http\Controllers\authcontroller;
use App\Http\Controllers\employecontroller;
use App\Http\Controllers\jobcontroller;
use App\Http\Controllers\userindexcontroller;
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
// authentication

Route::get('/registation', [authcontroller::class, 'registation']);

Route::get('/registationemploy', [authcontroller::class, 'registationemploy']);
Route::get('/logout', [authcontroller::class, 'logout']);
Route::post('/adduser', [authcontroller::class, 'adduser'])->name('adduser');
Route::post('/addemploy', [authcontroller::class, 'addemploy'])->name('addemploy');
Route::post('/login', [authcontroller::class, 'login'])->name('login');
Route::post('/loginemploy', [authcontroller::class, 'loginemploy'])->name('loginemploy');
Route::post('/loginadmin', [authcontroller::class, 'loginadmin'])->name('loginadmin');

// employe employedashbord
Route::get('/employedashboard', [employecontroller::class, 'employedashboard'])->middleware('islogdinemploy');
Route::get('employe/postjob', [employecontroller::class, 'postjob'])->middleware('islogdinemploy');
Route::get('/employe/managejob', [employecontroller::class, 'managejob'])->middleware('islogdinemploy');
Route::get('companyprofile', [employecontroller::class, 'companyprofile'])->middleware('islogdinemploy');
Route::post('/jobstor', [employecontroller::class, 'jobstor'])->middleware('islogdinemploy');
Route::post('/updateprofileemploy/{id}', [employecontroller::class, 'updateprofileemploy'])->middleware('islogdinemploy');
Route::get('/employ/viewjob/{id}', [employecontroller::class, 'viewjob'])->middleware('islogdinemploy');
Route::get('/employ/delletjob/{id}', [employecontroller::class, 'delletjob'])->middleware('islogdinemploy');
Route::get('/employe/applicantslist', [employecontroller::class, 'applicantslist'])->middleware('islogdinemploy');
Route::get('/download/{file}', [employecontroller::class, 'downloadPdfFile'])->middleware('islogdinemploy');

// user
Route::get('/', [userindexcontroller::class, 'index']);
Route::get('/userdasboard', [userindexcontroller::class, 'userdasboard'])->middleware('islogdin');
Route::get('/userjobview/{id}', [userindexcontroller::class, 'userjobview']);
Route::post('/updateprofile/{id}', [userindexcontroller::class, 'updateprofile'])->middleware('islogdin');
Route::post('/uplodecv/{id}', [userindexcontroller::class, 'uplodecv'])->middleware('islogdin');

Route::get('/userjoblist', [userindexcontroller::class, 'userjoblist']);
Route::get('/joblist', [userindexcontroller::class, 'joblist']);

Route::post('/searchdata', [userindexcontroller::class, 'searchdata']);

Route::get('/userprofile', [userindexcontroller::class, 'userprofile'])->middleware('islogdin');
Route::get('/apply/{id}', [userindexcontroller::class, 'apply'])->middleware('islogdin');

// admin
Route::get('/admin', [jobcontroller::class, 'dashbord'])->middleware('adminlogin');
Route::get('/admin/cattbl', [jobcontroller::class, 'cattbl'])->middleware('adminlogin');
Route::get('/admin/userlist', [jobcontroller::class, 'userlist'])->middleware('adminlogin');
Route::get('/admin/employlist', [jobcontroller::class, 'employlist'])->middleware('adminlogin');
Route::get('/admin/addcat', [jobcontroller::class, 'addcat'])->middleware('adminlogin');
Route::post('/admin/catstor', [jobcontroller::class, 'catstor'])->middleware('adminlogin');
Route::get('/admin/editcat/{id}', [jobcontroller::class, 'editcat'])->middleware('adminlogin');
Route::post('/admin/updatedata/{id}', [jobcontroller::class, 'updatedata'])->middleware('adminlogin');
Route::get('/admin/delletdata/{id}', [jobcontroller::class, 'delletdata'])->middleware('adminlogin');
Route::get('/admin/delletuserdata/{id}', [jobcontroller::class, 'delletuserdata'])->middleware('adminlogin');
Route::get('/admin/delletemploydata/{id}', [jobcontroller::class, 'delletemploydata'])->middleware('adminlogin');
Route::get('/admin/joblist', [jobcontroller::class, 'joblist'])->middleware('adminlogin');
Route::get('/admin/pandingjob', [jobcontroller::class, 'pandingjob'])->middleware('adminlogin');
Route::get('/admin/approvejob', [jobcontroller::class, 'approvejob'])->middleware('adminlogin');
Route::get('/admin/location', [jobcontroller::class, 'locationtbl'])->middleware('adminlogin');
Route::get('/admin/addlocation', [jobcontroller::class, 'addlocation'])->middleware('adminlogin');
Route::post('/admin/locationstor', [jobcontroller::class, 'locationstor'])->middleware('adminlogin');
Route::get('/admin/editlocation/{id}', [jobcontroller::class, 'editlocation'])->middleware('adminlogin');
Route::post('/admin/updatelocation/{id}', [jobcontroller::class, 'updatelocation'])->middleware('adminlogin');
Route::get('/admin/delletlocation/{id}', [jobcontroller::class, 'delletlocation'])->middleware('adminlogin');
Route::get('/admin/viewjob/{id}', [jobcontroller::class, 'viewjob'])->middleware('adminlogin');
Route::get('/admin/aprovejob/{id}', [jobcontroller::class, 'aprovejob'])->middleware('adminlogin');
Route::get('/admin/disablejob/{id}', [jobcontroller::class, 'disablejob'])->middleware('adminlogin');
Route::get('/admin/delletjob/{id}', [jobcontroller::class, 'delletjob'])->middleware('adminlogin');
Route::get('/admin/settings', [jobcontroller::class, 'settings'])->middleware('adminlogin');
Route::post('/admin/updatesettings', [jobcontroller::class, 'updatesettings'])->middleware('adminlogin');

Route::get('/adminlogin', [jobcontroller::class, 'adminlogin']);
