<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BtebCourse;
use Illuminate\Http\Request;

class OurBtebShortCourseController extends Controller
{
    public function index(){
        $ourBtebShortCourses = BtebCourse::orderBy('priority_number', 'asc')->where('status', 1)->get();
        return view('frontend.pages.bteb-short-course', compact('ourBtebShortCourses'));
    }

    public function ourBtebShortCourseDetails(string $slug){
        $ourBtebShortCourse = BtebCourse::where(['slug' => $slug, 'status' => 1])->orderBy('priority_number', 'asc')->firstOrFail();

        $relatedOurBtebShortCourses = BtebCourse::where('id', '!=', $ourBtebShortCourse->id)->orderBy('priority_number', 'asc')->get();
        return view('frontend.pages.bteb-short-course-details', compact('ourBtebShortCourse', 'relatedOurBtebShortCourses'));
    }
}
