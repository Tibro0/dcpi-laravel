<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DiplomaInEngineeringClassRoutine;
use Illuminate\Http\Request;

class ClassRoutineController extends Controller
{
    public function diplomaInEngineeringClassRoutine(){
        $diplomaInEngineeringClassRoutine = DiplomaInEngineeringClassRoutine::first();
        return view('frontend.pages.diploma-in-engineering-class-routine', compact('diplomaInEngineeringClassRoutine'));
    }
}
