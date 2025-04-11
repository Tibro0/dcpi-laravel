<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DiplomaInEngineeringClassRoutine;
use App\Models\ShortCourseRoutine;
use Illuminate\Http\Request;

class ClassRoutineController extends Controller
{
    public function diplomaInEngineeringClassRoutine(){
        $diplomaInEngineeringClassRoutine = DiplomaInEngineeringClassRoutine::first();
        return view('frontend.pages.diploma-in-engineering-class-routine', compact('diplomaInEngineeringClassRoutine'));
    }

    public function shortCourseClassRoutine(){
        $shortCourseRoutines = ShortCourseRoutine::orderBy('priority_number', 'asc')->where('status', 1)->get();
        return view('frontend.pages.short-course-class-routine', compact('shortCourseRoutines'));
    }
}
