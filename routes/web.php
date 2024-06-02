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

Route::get('/', function () {
    // Mengambil jumlah data dari setiap model
    $academicCount = \App\Models\Academic::count();
    $jobCount = \App\Models\Job::count();
    $internshipCount = \App\Models\Internship::count();
    $organizationCount = \App\Models\Organization::count();
    $awardCount = \App\Models\Award::count();
    $courseCount = \App\Models\Course::count();
    $skillCount = \App\Models\Skill::count();

    // Periksa apakah setidaknya satu model memiliki data
    if ($academicCount > 0 || $jobCount > 0 || $internshipCount > 0 || $organizationCount > 0 || $awardCount > 0 || $courseCount > 0 || $skillCount > 0) {
        // Jika setidaknya satu model memiliki data, arahkan ke halaman tracerstudy.index
        return redirect('/tracerstudy');
    } else {
        // Jika tidak ada data pada semua model, arahkan ke halaman tracerstudy.quiz
        return redirect('/tracerstudy/quiz');
    }
});

Route::get('/tracerstudy', function () {
    // Mengambil data dari semua model yang diperlukan
    $academics = \App\Models\Academic::paginate(5);
    $jobs = \App\Models\Job::paginate(5);
    $internships = \App\Models\Internship::paginate(5);
    $organizations = \App\Models\Organization::paginate(5);
    $awards = \App\Models\Award::paginate(5);
    $courses = \App\Models\Course::paginate(5);
    $skills = \App\Models\skill::paginate(5);
    // Mengirim data ke view
    return view('tracerstudy.index', compact('academics', 'jobs', 'internships', 'organizations', 'awards', 'courses', 'skills'));
});

Route::get('/tracerstudy/quiz', 'App\Http\Controllers\QuizController@create')->name('tracerstudy.quiz');
Route::post('/tracerstudy/quiz', 'App\Http\Controllers\QuizController@store')->name('tracerstudy.store');


Route::resource('/academic', \App\Http\Controllers\academicController::class);
Route::resource('/job', \App\Http\Controllers\jobController::class);
Route::resource('/internship', \App\Http\Controllers\InternshipController::class);
Route::resource('/organization', \App\Http\Controllers\OrganizationController::class);
Route::resource('/award', \App\Http\Controllers\AwardController::class);
Route::resource('/course', \App\Http\Controllers\CourseController::class);
Route::resource('/skill', \App\Http\Controllers\SkillController::class);