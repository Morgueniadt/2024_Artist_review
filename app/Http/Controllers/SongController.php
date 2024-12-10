<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Album;

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
        $albums = Album::all();
        // Return the view for creating a new song        
        return view('songs.create', compact('albums'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|date_format:H:i:s', // Adjust if you use numeric duration
            'release_year' => 'required|digits:4',
            // If you plan to handle file uploads, you could add:
            // 'song_file' => 'required|file|mimes:mp3,wav|max:10240', // 10MB max
        ]);

        // Optionally handle file upload (if applicable)
        // if ($request->hasFile('song_file')) {
        //     $path = $request->file('song_file')->store('songs', 'public');
        //     $validated['song_file'] = $path; // Store the file path in the database
        // }

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
        // Example in your controller
        // $albums = Album::all();
        $song->load('albums');

        // Return a view to display the details of the song
        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {

        $albums = Album::all();

        $data = [
            'song'  => $song,
            'albums' => $albums            
        ];

        // Return the view with the song to edit
        return view('songs.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|date_format:H:i:s', // Adjust if you use numeric duration
            'release_year' => 'required|digits:4',
            // If you plan to handle file uploads, you could add:
            // 'song_file' => 'nullable|file|mimes:mp3,wav|max:10240', // Optional file upload
        ]);

        // Optionally handle file upload (if applicable)
        // if ($request->hasFile('song_file')) {
        //     $path = $request->file('song_file')->store('songs', 'public');
        //     $validated['song_file'] = $path; // Store the file path in the database
        // }

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
        // Optionally delete song file if exists
        // if ($song->song_file && Storage::exists($song->song_file)) {
        //     Storage::delete($song->song_file); // Delete the file
        // }

        // Delete the song from the database
        $song->delete();

        // Redirect back to the songs index page with a success message
        return redirect()->route('songs.index')->with('success', 'Song deleted successfully.');
    }
}
