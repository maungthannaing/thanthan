<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Subjectontroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FileController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//For Category 
Route::get('/att_index', [App\Http\Controllers\AttController::class, 'index'])->name('att_index');
Route::get('/att_create', [App\Http\Controllers\AttController::class, 'create'])->name('att_create');
Route::post('/att_create', [App\Http\Controllers\AttController::class, 'store'])->name('att_store');

//For Post
Route::get('/t_index',[StudentController::class,'index'])->name('t_detail');
Route::get('/t_create',[StudentController::class,'t_create'])->name('t_create');
Route::post('/t_create',[StudentController::class,'t_store'])->name('t_store');
Route::get('/t_edit/{id}',[StudentController::class, 't_edit'])->name('t_edit');
Route::post('/t_edit/{id}',[StudentController::class, 't_update'])->name('t_update');
Route::post('/t_detial/{id}',[StudentController::class, 't_detial'])->name('t_show');
Route::get('/t_destroy/{id}',[StudentController::class, 't_destroy'])->name('t_delete');

// //file route 

Route::get('/f_index',[FileController::class,'f_index'])->name('f_index');
Route::get('/f_create',[FileController::class,'f_create'])->name('f_create');
Route::post('/f_create',[FileController::class,'store'])->name('store');


//file route 

Route::get('/subject_index',[App\Http\Controllers\SubjectController::class,'index'])->name('subject_index');
Route::get('/subject_create',[App\Http\Controllers\SubjectController::class,'create'])->name('subject_create');
Route::post('/subject_create', [App\Http\Controllers\SubjectController::class, 'store'])->name('subject_store');


//file route 

Route::get('/department_index',[App\Http\Controllers\DepartmentController::class,'index'])->name('department_index');
Route::get('/department_create',[App\Http\Controllers\DepartmentController::class,'create'])->name('department_create');
Route::post('/department_create', [App\Http\Controllers\DepartmentController::class, 'store'])->name('department_store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
