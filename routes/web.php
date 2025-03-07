<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\OurDiplomaEngineeringCourseController;
use App\Http\Controllers\Frontend\OurTeacherController;
use App\Http\Controllers\Frontend\UpcomingEventController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/** Admin Auth Routes */
Route::group(['middleware' => 'guest'], function () {
    Route::get('admin/login', [AdminAuthController::class, 'index'])->name('admin.login');
    Route::get('admin/forget-password', [AdminAuthController::class, 'forgetPassword'])->name('admin.forget-password');
});

Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/** Contact Route */
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');

/** Teacher Route */
Route::get('our-teacher', [OurTeacherController::class, 'index'])->name('teacher.index');
Route::get('our-teacher/{slug}', [OurTeacherController::class, 'ourTeacherDetails'])->name('our-teacher.details');

/** Upcoming Event Route */
Route::get('upcoming-event', [UpcomingEventController::class, 'index'])->name('upcoming-event.index');
Route::get('upcoming-event/{slug}', [UpcomingEventController::class, 'upcomingEventDetails'])->name('upcoming-event.details');

/** Diploma Engineering Course Route */
Route::get('diploma-engineering-course', [OurDiplomaEngineeringCourseController::class, 'index'])->name('diploma-engineering-course.index');
Route::get('diploma-engineering-course/{slug}', [OurDiplomaEngineeringCourseController::class, 'diplomaEngineeringCourseDetails'])->name('diploma-engineering-course.details');

require __DIR__.'/auth.php';
