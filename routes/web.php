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

//Account Creation
Route::get('/login', [App\Http\Controllers\SkillsAcademyController::class, 'register']);
Route::get('/process', [App\Http\Controllers\SkillsAcademyController::class, 'create'])->name('login-process');

//basic route
Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home-about', [App\Http\Controllers\HomeController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog']);
Route::get('/blog-details', [App\Http\Controllers\HomeController::class, 'blogDetails']);




//Entertainment
Route::get('/entertainment', [App\Http\Controllers\EntertainmentController::class, 'index']);
