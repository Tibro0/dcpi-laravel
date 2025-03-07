<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class OurTeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::orderBy('priority_number', 'asc')->where('status', 1)->get();
        return view('frontend.pages.teacher', compact('teachers'));
    }

    public function ourTeacherDetails(string $slug){
        $teacher = Teacher::where(['slug' => $slug, 'status' => 1])->orderBy('priority_number', 'asc')->firstOrFail();
        return view('frontend.pages.our-teacher-details', compact('teacher'));
    }
}
