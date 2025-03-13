<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index(){
        $notices = Notice::orderBy('priority_number', 'asc')->where('status', 1)->get();
        return view('frontend.pages.notice', compact('notices'));
    }

    public function noticeDetails(string $slug){
        $notice = Notice::where(['slug' => $slug, 'status' => 1])->firstOrFail();
        return view('frontend.pages.notice-details', compact('notice'));
    }
}
