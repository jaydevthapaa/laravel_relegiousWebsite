<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class FrontedController extends Controller
{
    function events(){
        $events = Event::where('status', 'Upcoming') -> orderBy('event_date', 'asc')-> paginate(9);

        return view('event', compact('events'));
    }

    function eventDetail(int $id){
        $event = Event::findOrFail($id);

        $reletedEvents= Event::where('id', '!=', $id)->where('status', 'Upcoming') ->latest() -> take(3) -> get();

        return view('event_detail', compact('event', 'reletedEvents'));
    }
}
