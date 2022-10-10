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
Route::post('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/coming-soon', [App\Http\Controllers\HomeController::class, 'comingSoon']);


//adding og blog post
Route::get('/blog-manage', [App\Http\Controllers\HomeController::class, 'blogManage']);
Route::post('/blog-update', [App\Http\Controllers\HomeController::class, 'blogUpdate'])->name('blogAddNew');




//Entertainment
Route::get('/entertainment', [App\Http\Controllers\EntertainmentController::class, 'index']);
Route::post('/file-upload', [App\Http\Controllers\EntertainmentController::class, 'fileUpload'])->name('fileUpload');



//Skiils Academy
Route::get('/skills-academy', [App\Http\Controllers\SkillsAcademyController::class, 'index']);
Route::get('/my-account',     [App\Http\Controllers\SkillsAcademyController::class, 'userLogin']);
Route::post('/elogin',        [App\Http\Controllers\SkillsAcademyController::class, 'elogin'])->name('login');
Route::post('/register',      [App\Http\Controllers\SkillsAcademyController::class, 'store'])->name('register');
Route::get('/dologout',       [App\Http\Controllers\SkillsAcademyController::class, 'doLogout'])->name('doLogout');
Route::get('/shop',           [App\Http\Controllers\SkillsAcademyController::class, 'shop']);
Route::get('/checkout',           [App\Http\Controllers\SkillsAcademyController::class, 'checkout']);
Route::get('/courses',           [App\Http\Controllers\SkillsAcademyController::class, 'courses']);
Route::get('/course-manage',           [App\Http\Controllers\SkillsAcademyController::class, 'courseManage']);
Route::post('/course-Upload',           [App\Http\Controllers\SkillsAcademyController::class, 'courseUpload'])->name('courseUpload');







//Branding
Route::get('/branding', [App\Http\Controllers\BrandingController::class, 'index']);

