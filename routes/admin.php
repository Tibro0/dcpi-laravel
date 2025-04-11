<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AllStudentController;
use App\Http\Controllers\Admin\BannerFeatureController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BtebCourseController;
use App\Http\Controllers\Admin\CustomStaticPageController;
use App\Http\Controllers\Admin\DiplomaClassRoutineController;
use App\Http\Controllers\Admin\DiplomaEngineeringCourseController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FrontPageAboutUsSectionController;
use App\Http\Controllers\Admin\FrontPageCtaSectionController;
use App\Http\Controllers\Admin\FrontPageSuccessStorySectionController;
use App\Http\Controllers\Admin\ManagementCommitteeController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ResearchController;
use App\Http\Controllers\Admin\ShortCourseController;
use App\Http\Controllers\Admin\ShortCourseRoutineController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

/** Profile Route */
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::put('profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::put('profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');

/** Slider Routes */
Route::resource('slider', SliderController::class);

/** Slider Routes */
Route::resource('banner-feature', BannerFeatureController::class);

/** Front Page About Us Section Routes */
Route::get('front-page-about-us-section/index', [FrontPageAboutUsSectionController::class, 'index'])->name('front-page-about-us-section.index');
Route::put('front-page-about-us-section/update', [FrontPageAboutUsSectionController::class, 'update'])->name('front-page-about-us-section.update');

/** Diploma Engineering Course Routes */
Route::resource('diploma-engineering-course', DiplomaEngineeringCourseController::class);

/** Short Course Routes */
Route::resource('short-course', ShortCourseController::class);

/** BTEB Course Routes */
Route::resource('bteb-course', BtebCourseController::class);


/** Front Page Cta Section Routes */
Route::get('front-page-cta-section/index', [FrontPageCtaSectionController::class, 'index'])->name('front-page-cta-section.index');
Route::put('front-page-cta-section/update', [FrontPageCtaSectionController::class, 'update'])->name('front-page-cta-section.update');

/** Front Page Success Story Section Routes */
Route::get('front-page-success-story-section/index', [FrontPageSuccessStorySectionController::class, 'index'])->name('front-page-success-story-section.index');
Route::put('front-page-success-story-section/update', [FrontPageSuccessStorySectionController::class, 'update'])->name('front-page-success-story-section.update');

/** Events Routes */
Route::resource('event', EventController::class);

/** Teacher Routes */
Route::resource('teacher', TeacherController::class);

/** Management Committee Routes */
Route::resource('management-committee', ManagementCommitteeController::class);

/** Blog Routes */
Route::resource('blog', BlogController::class);

/** About Us Page Route */
Route::get('about-us/index', [AboutUsController::class, 'index'])->name('about-us.index');
Route::put('about-us/update', [AboutUsController::class, 'update'])->name('about-us.update');

/** Research Routes */
Route::resource('research', ResearchController::class);

/** Notice Routes */
Route::resource('notice', NoticeController::class);

/** Custom Page All Route */
Route::get('our-identity/index', [CustomStaticPageController::class, 'ourIdentityIndex'])->name('our-identity.index');
Route::put('our-identity/update', [CustomStaticPageController::class, 'ourIdentityUpdate'])->name('our-identity.update');

/** Subscriber All Route */
Route::get('subscriber/index', [SubscriberController::class, 'index'])->name('subscriber.index');
Route::delete('subscriber/delete/{id}', [SubscriberController::class, 'destroy'])->name('subscriber.destroy');

/** Student All Route */
Route::get('student/index', [AllStudentController::class, 'allStudentIndex'])->name('student.index');
Route::get('student/edit/{id}', [AllStudentController::class, 'edit'])->name('student.edit');
Route::put('student/update/{id}', [AllStudentController::class, 'update'])->name('student.update');
Route::delete('student/delete/{id}', [AllStudentController::class, 'destroy'])->name('student.destroy');

/** Diploma Class Routine All Route */
Route::get('diploma-class-routine-civil/index', [DiplomaClassRoutineController::class, 'civilIndex'])->name('civil.index');
Route::put('diploma-class-routine-civil/update', [DiplomaClassRoutineController::class, 'civilUpdate'])->name('civil.update');

Route::get('diploma-class-routine-computer/index', [DiplomaClassRoutineController::class, 'computerIndex'])->name('computer.index');
Route::put('diploma-class-routine-computer/update', [DiplomaClassRoutineController::class, 'computerUpdate'])->name('computer.update');

Route::get('diploma-class-routine-electrical/index', [DiplomaClassRoutineController::class, 'electricalIndex'])->name('electrical.index');
Route::put('diploma-class-routine-electrical/update', [DiplomaClassRoutineController::class, 'electricalUpdate'])->name('electrical.update');

Route::get('diploma-class-routine-electronics/index', [DiplomaClassRoutineController::class, 'electronicsIndex'])->name('electronics.index');
Route::put('diploma-class-routine-electronics/update', [DiplomaClassRoutineController::class, 'electronicsUpdate'])->name('electronics.update');

Route::get('diploma-class-routine-telecommunication/index', [DiplomaClassRoutineController::class, 'telecommunicationIndex'])->name('telecommunication.index');
Route::put('diploma-class-routine-telecommunication/update', [DiplomaClassRoutineController::class, 'telecommunicationUpdate'])->name('telecommunication.update');

/** Short Course Routine All Route */
Route::resource('short-course-routine', ShortCourseRoutineController::class);
