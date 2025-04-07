<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassRoutineController extends Controller
{
    public function diplomaInEngineeringClassRoutine(){
        return view('frontend.pages.diploma-in-engineering-class-routine');
    }
}
