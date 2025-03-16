<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllStaticPageController extends Controller
{
    public function ourIdentity(){
        return view('frontend.pages.static-page.our-identity');
    }
}
