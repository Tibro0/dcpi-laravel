<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\FrontPageSuccessStorySection;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        $aboutUs = AboutUs::first();
        $frontPageSuccessStorySection = FrontPageSuccessStorySection::first();
        $teachers = Teacher::orderBy('priority_number', 'asc')->where('status', 1)->take(3)->get();
        return view('frontend.pages.about-us', compact('aboutUs', 'frontPageSuccessStorySection', 'teachers'));
    }
}
