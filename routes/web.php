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
Route::get('/error', [App\Http\Controllers\HomeController::class, 'errorPage']);
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq']);






//Entertainment
Route::get('/entertainment', [App\Http\Controllers\EntertainmentController::class, 'index']);

//Skiils Academy
Route::get('/skills-academy', [App\Http\Controllers\SkillsAcademyController::class, 'index']);
Route::get('/my-account',     [App\Http\Controllers\SkillsAcademyController::class, 'userLogin']);
Route::post('/elogin',     [App\Http\Controllers\SkillsAcademyController::class, 'elogin'])->name('login');
Route::post('/register',     [App\Http\Controllers\SkillsAcademyController::class, 'store'])->name('register');
Route::get('/dologout',     [App\Http\Controllers\SkillsAcademyController::class, 'doLogout'])->name('doLogout');



//Branding
Route::get('/branding', [App\Http\Controllers\BrandingController::class, 'index']);

