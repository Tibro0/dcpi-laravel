<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class UpcomingEventController extends Controller
{
    public function index(){
        $events = Event::orderBy('priority_number', 'asc')->where('status', 1)->get();
        return view('frontend.pages.upcoming-event', compact('events'));
    }

    public function upcomingEventDetails(string $slug){
        $event = Event::where(['slug' => $slug, 'status' => 1])->orderBy('priority_number', 'asc')->firstOrFail();
        return view('frontend.pages.upcoming-event-details', compact('event'));
    }
}
