<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ShortCourse;
use Illuminate\Http\Request;

class OurShortCourseController extends Controller
{
    public function index(){
        $ourShortCourses = ShortCourse::orderBy('priority_number', 'asc')->where('status', 1)->get();
        return view('frontend.pages.short-course', compact('ourShortCourses'));
    }

    public function ourShortCourseDetails(string $slug){
        $ourShortCourse = ShortCourse::where(['slug' => $slug, 'status' => 1])->orderBy('priority_number', 'asc')->firstOrFail();

        $relatedOurShortCourses = ShortCourse::where('id', '!=', $ourShortCourse->id)->orderBy('priority_number', 'asc')->get();
        return view('frontend.pages.short-course-details', compact('ourShortCourse', 'relatedOurShortCourses'));
    }
}
