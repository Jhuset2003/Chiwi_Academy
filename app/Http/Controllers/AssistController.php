<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AssistController extends Controller
{
    public function store(Event $event){
        $event->tickets()->create([
            'user_id' => auth()->id()
        ]);

        return back();
    }
}
