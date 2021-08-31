<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
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
    return view('layouts.cpanel.app');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/personalinformation', function(){
    return view('personalinfo.personal');
})->name('personal');


Route::get('/work', function(){
    return view('work.work');
})->name('work');

Route::get('/interset', function(){
    return view('interset.interset');
})->name('interset');

Route::get('/course', function(){
    return view('course.course');
})->name('course');

Route::get('/skill', function(){
    return view('skill.skill');
})->name('skill');

Route::get('/portfolios', function(){
    return view('portfolios.portfolios');
})->name('portfolios');
Route::get('/social', function(){
    return view('social.social');
})->name('social');
Route::get('/testimonial', function(){
    return view('testimonials.testimonial');
})->name('testimonial');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
