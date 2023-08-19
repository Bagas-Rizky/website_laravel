<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\projectController;
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


Route::controller(HomeController::class)->group(function (){
    Route::get('/', 'index')->name('home');
    Route::get('/home', 'index')->name('home');
});
Route::controller(AboutController::class)->group(function (){
    Route::get('/about', 'index')->name('about');
});
Route::controller(projectController::class)->group(function (){
    Route::get('/project', 'index')->name('project');
});
Route::controller(ContactController::class)->group(function (){
    Route::get('/contact', 'index')->name('contact');
});

// ADMIN ROUTES
// test