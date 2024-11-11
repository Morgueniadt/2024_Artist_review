<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all(); // Fetch all albums
        return view('albums.index', compact('albums')); // Return the view with albums 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('albums.create'); // Corrected view name to 'albums.create'
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate input
    $request->validate([
        'name' => 'required|string|max:255',
        'duration' => 'required|string|max:50',
        'number_of_songs' => 'required|integer|min:1',
        'release_year' => 'required|integer|between:1900,' . date('Y'),
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // image validation
    ]);

    // Check if the image is uploaded and handle it
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension(); // Create a unique name for the image
        $request->image->move(public_path('images/albums'), $imageName); // Store the image in the 'images/albums' directory
    }

    // Create an album record in the database
    Album::create([
        'name' => $request->name,
        'duration' => $request->duration,
        'number_of_songs' => $request->number_of_songs,
        'release_year' => $request->year,
        'image' => isset($imageName) ? 'images/albums/' . $imageName : null, // Save the image path
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Redirect to the album index page with a success message
    return to_route('albums.index')->with('success', 'Album created successfully!');
}


    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        return view('albums.show', compact('album')); // Pass the album to the view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        return view('albums.edit', compact('album')); // Pass the specific album to the view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Make image nullable
            'duration' => 'required|string',
            'release_year' => 'required|date',
            'number_of_songs' => 'required|integer',
        ]);

        $album->name = $request->name; // Update name
        $album->duration = $request->duration;
        $album->release_year = $request->release_year;
        $album->number_of_songs = $request->number_of_songs;

        if ($request->hasFile('image')) {
            // Optionally delete the old image if you want to replace it
            if ($album->image) {
                \Storage::delete('public/' . $album->image); // Delete old image
            }
            $imagePath = $request->file('image')->store('albums', 'public');
            $album->image = $imagePath; // Save new image path
        }

        $album->save();

        return redirect()->route('albums.index')->with('success', 'Album updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        // Delete the associated image if it exists
        if ($album->image) {
            \Storage::delete('public/' . $album->image);
        }

        $album->delete(); // Delete the album record

        return redirect()->route('albums.index')->with('success', 'Album deleted successfully.');
    }
}