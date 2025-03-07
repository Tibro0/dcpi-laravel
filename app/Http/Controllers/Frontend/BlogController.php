<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::with(['user'])->orderBy('id', 'DESC')->where('status', 1)->get();
        return view('frontend.pages.blog', compact('blogs'));
    }

    public function blogDetails(string $slug){
        $blog = Blog::where(['slug' => $slug, 'status' => 1])->firstOrFail();
        return view('frontend.pages.blog-details', compact('blog'));
    }
}
