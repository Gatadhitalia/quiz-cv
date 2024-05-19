<?php

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

Route::resource('/academic', \App\Http\Controllers\academicController::class);
Route::resource('/job', \App\Http\Controllers\jobController::class);
Route::resource('/internship', \App\Http\Controllers\InternshipController::class);
Route::resource('/organization', \App\Http\Controllers\OrganizationController::class);
Route::resource('/award', \App\Http\Controllers\AwardController::class);
Route::resource('/course', \App\Http\Controllers\CourseController::class);