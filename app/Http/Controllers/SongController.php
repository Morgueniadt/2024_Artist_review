<?php

namespace App\Http\Controllers;


use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all songs from the database
        $songs = Song::all();
        
        // Return the view with the list of songs
        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new song
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|date_format:H:i:s', 
            'release_year' => 'required|digits:4',
        ]);

        // Create a new song using the validated data
        Song::create($validated);

        // Redirect back to the songs index page with a success message
        return redirect()->route('songs.index')->with('success', 'Song created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        // Return a view to display the details of the song
        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        // Return the view with the song to edit
        return view('songs.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|date_format:H:i:s', 
            'release_year' => 'required|digits:4',
        ]);

        // Update the song using the validated data
        $song->update($validated);

        // Redirect back to the songs index page with a success message
        return redirect()->route('songs.index')->with('success', 'Song updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        // Delete the song from the database
        $song->delete();

        // Redirect back to the songs index page with a success message
        return redirect()->route('songs.index')->with('success', 'Song deleted successfully.');
    }
}
