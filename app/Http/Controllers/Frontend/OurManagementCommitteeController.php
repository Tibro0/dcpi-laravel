<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DiplomaEngineeringCourse;
use App\Models\ManagementCommittee;
use Illuminate\Http\Request;

class OurManagementCommitteeController extends Controller
{
    public function index(){
        $managementCommittees = ManagementCommittee::orderBy('priority_number', 'asc')->where('status', 1)->get();
        return view('frontend.pages.management-committee', compact('managementCommittees'));
    }

    public function ourManagementCommitteeDetails(string $slug){
        $managementCommittee = ManagementCommittee::where(['slug' => $slug, 'status' => 1])->orderBy('priority_number', 'asc')->firstOrFail();
        $diplomaEngineeringCourses = DiplomaEngineeringCourse::orderBy('priority_number', 'asc')->where('status', 1)->get();
        return view('frontend.pages.management-committee-details', compact('managementCommittee', 'diplomaEngineeringCourses'));
    }
}
