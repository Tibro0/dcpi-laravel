<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function index(){
        $research = Research::orderBy('priority_number', 'asc')->where('status', 1)->get();
        return view('frontend.pages.research', compact('research'));
    }
}
