<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DiplomaEngineeringCourse;
use Illuminate\Http\Request;

class OurDiplomaEngineeringCourseController extends Controller
{
    public function index(){
        $diplomaEngineeringCourses = DiplomaEngineeringCourse::orderBy('priority_number', 'asc')->where('status', 1)->get();
        return view('frontend.pages.diploma-engineering-course', compact('diplomaEngineeringCourses'));
    }

    public function diplomaEngineeringCourseDetails(string $slug){
        $diplomaEngineeringCourse = DiplomaEngineeringCourse::where(['slug' => $slug, 'status' => 1])->orderBy('priority_number', 'asc')->firstOrFail();

        $relatedDiplomaEngineeringCourses = DiplomaEngineeringCourse::where('id', '!=', $diplomaEngineeringCourse->id)->orderBy('priority_number', 'asc')->get();
        return view('frontend.pages.diploma-engineering-course-details', compact('diplomaEngineeringCourse', 'relatedDiplomaEngineeringCourses'));
    }
}
