<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('date', 'asc')->paginate(10);

        return view('events.index', [
            'events' => $events
        ]);
    }

    public function show(Event $event)
    {
        return view('events.show', [
            'event' => $event
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

    //destroy
    public function destroy(Event $event)
    {
        if (!$event->ownedBy(auth()->user())) {
            return back();
        }

        $event->delete();

        return redirect()->route('dashboard');
    }
}
