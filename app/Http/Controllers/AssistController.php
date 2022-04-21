<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AssistController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Event $event)
    {

        if (!$event->isRegistered(auth()->user()) && $event->isAssistable()) {

            $event->tickets()->create([
                'user_id' => auth()->id()
            ]);
        }
        return back();
    }

    public function destroy(Event $event, Request $request)
    {
        $request->user()->tickets()->where('event_id', $event->id)->delete();
        return back();
    }

}
