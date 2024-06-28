<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->name('login');
Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Routes requiring authentication (protected with 'auth' middleware)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::resource('teachers', TeacherController::class);
    Route::resource('students', StudentController::class);
    Route::resource('subjects', SubjectController::class);
    Route::get('/fetch/subjects', [SubjectController::class, 'fetchSubjects'])->name('fetch.subjects');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
