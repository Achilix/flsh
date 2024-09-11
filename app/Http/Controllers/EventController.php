<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Import Storage facade

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all(); // Retrieve all events
        return view('events', compact('events')); // Pass events to the view
    }

    public function store(Request $request)
{
    // Validate the request
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'Host' => 'required|string|max:255',
        'duration' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'time' => 'required|date',
        'description' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // Handle image upload if exists
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('public/eventsimg'); // Save image
        $validatedData['image'] = Storage::url($path); // Store image path
    }
    Event::create($validatedData);
    // Create the event with validated data (including image path if present)

    // Redirect back with a success message
    return redirect()->route('events');
}

    // Other resource methods as needed...
}
