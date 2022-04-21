<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', [
            'events' => $events
        ]);
    }

    public function store(Request $request)
    {
        //validate
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'max_capability' => 'required',
            'link_session' => 'required',
            'upload_image' => 'required',
            'description' => 'required',
        ]);

        //store
        Event::create([
            'name' => $request->name,
            'date' => $request->date,
            'max_capability' => $request->max_capability,
            'link' => $request->link_session,
            'image' => $request->upload_image,
            'description' => $request->description,
            'user_id' => auth()->user()->id,
        ]);

        //redirect
        return redirect()->route('dashboard');

    }
}
