<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return Event::with('category')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'category_id' => 'required'
        ]);

        return Event::create($request->all());
    }

    public function show(Event $event)
    {
        return $event->load('category');
    }
}
