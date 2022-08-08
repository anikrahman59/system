<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;


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

Route::get('/hello', function () {
    return "<h1> HELLOW WORLD !<h1>";
});

 Route::get('/hello2', [PagesController::class, "index"])->name("testing");

 Route::get('/hello3', [PagesController::class, "index2"])->name("hi");

Route::get('/hello4', [PagesController::class, "profile"])->name("p");

Route::get('/user/{id}', function ($id) {
    return "the passed value is " . $id . "yes";
});

Route::get('/studentList', [StudentController::class, "studentList"])->name("studentList");

Route::get('/studentCreate',[StudentController::class,"studentCreate"])->name("studentCreate");

Route::post('/studentCreate',[StudentController::class,"studentCreateSubmitted"])->name("studentCreate");

Route::get('/studentEdit/{id}/{name}',[StudentController::class,'studentEdit'])->name('studentEdit');

Route::post('/studentEdit',[StudentController::class,'studentEditSubmitted'])->name('studentEdit');

Route::get('/studentDelete/{id}/{name}',[StudentController::class,'studentDelete'])->name('studentDelete');

