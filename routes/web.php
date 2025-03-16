<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\AllStaticPageController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\NoticeController;
use App\Http\Controllers\Frontend\OurDiplomaEngineeringCourseController;
use App\Http\Controllers\Frontend\OurManagementCommitteeController;
use App\Http\Controllers\Frontend\OurShortCourseController;
use App\Http\Controllers\Frontend\OurTeacherController;
use App\Http\Controllers\Frontend\ResearchController;
use App\Http\Controllers\Frontend\UpcomingEventController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/** Admin Auth Routes */
Route::group(['middleware' => 'guest'], function () {
    Route::get('admin/login', [AdminAuthController::class, 'index'])->name('admin.login');
    Route::get('admin/forget-password', [AdminAuthController::class, 'forgetPassword'])->name('admin.forget-password');
});

Route::get('/', [FrontendController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::put('dashboard/profile', [DashboardController::class, 'dashboardUpdateProfile'])->name('profile.update');
});

/** Contact Route */
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');

/** Teacher Route */
Route::get('our-teacher', [OurTeacherController::class, 'index'])->name('teacher.index');
Route::get('our-teacher/{slug}', [OurTeacherController::class, 'ourTeacherDetails'])->name('our-teacher.details');

/** Management Committee Route */
Route::get('management-committee', [OurManagementCommitteeController::class, 'index'])->name('our-management-committee.index');
Route::get('management-committee/{slug}', [OurManagementCommitteeController::class, 'ourManagementCommitteeDetails'])->name('our-management-committee.details');

/** Upcoming Event Route */
Route::get('upcoming-event', [UpcomingEventController::class, 'index'])->name('upcoming-event.index');
Route::get('upcoming-event/{slug}', [UpcomingEventController::class, 'upcomingEventDetails'])->name('upcoming-event.details');

/** Diploma Engineering Course Route */
Route::get('diploma-engineering-course', [OurDiplomaEngineeringCourseController::class, 'index'])->name('diploma-engineering-course.index');
Route::get('diploma-engineering-course/{slug}', [OurDiplomaEngineeringCourseController::class, 'diplomaEngineeringCourseDetails'])->name('diploma-engineering-course.details');

/** Short Course Route */
Route::get('our-short-course', [OurShortCourseController::class, 'index'])->name('our-short-course.index');
Route::get('our-short-course/{slug}', [OurShortCourseController::class, 'ourShortCourseDetails'])->name('our-short-course.details');

/** Blog Route */
Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/{slug}', [BlogController::class, 'blogDetails'])->name('blog.details');

/** About US Route */
Route::get('about-us', [AboutUsController::class, 'index'])->name('about-us.index');

/** Research Route */
Route::get('research', [ResearchController::class, 'index'])->name('research.index');

/** Notice Route */
Route::get('notice', [NoticeController::class, 'index'])->name('notice.index');
Route::get('notice/{slug}', [NoticeController::class, 'noticeDetails'])->name('notice.details');

/** All Static Page */
Route::get('our-identity', [AllStaticPageController::class, 'ourIdentity'])->name('our-identity.index');

require __DIR__.'/auth.php';
