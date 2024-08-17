<?php
namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'Host' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'time' => 'required|date',
        ]);

        // Create the event
        Event::create($request->all());

        // Redirect back with a success message
        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    public function index()
    {
        $events = Event::all(); // Correct model reference
        return view('Events', compact('events'));
    }

    // Other resource methods as needed...
}
