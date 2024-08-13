<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use App\Models\Payment;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('layout');
});

Route::get('layout', [StudentController::class, 'layout']);
// Route::get('students/index', [StudentController::class, 'index']);

Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('courses', CourseController::class);
Route::resource('batches', BatchController::class);
Route::resource('enrollments', EnrollmentController::class);
Route::resource('payments', PaymentController::class);

Route::get('report/report1/{pid}', [ReportController::class, 'report1']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
