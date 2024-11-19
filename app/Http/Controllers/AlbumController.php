<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all albums from the database
        $albums = Album::all();

        // Return the view 'albums.index' with the list of albums
        return view('albums.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Restrict access to admin users only
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('album.index')->with('error', 'Access denied.');
        }

        // Return the view for creating a new album
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
        // Validate the form input for creating an album
        $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|string|max:50',
            'number_of_songs' => 'required|integer|min:1',
            'release_year' => 'required|integer|between:1900,' . date('Y'),
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);

        // Handle image upload if provided
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Store the image in the 'public/albums' directory
            $imagePath = $request->file('image')->store('albums', 'public');
        }

        // Create a new album record in the database
        Album::create([
            'name' => $request->name,
            'duration' => $request->duration,
            'number_of_songs' => $request->number_of_songs,
            'release_year' => $request->release_year,
            'image' => $imagePath, // Store the image path if uploaded
        ]);

        // Redirect back to the album index page with a success message
        return redirect()->route('album.index')->with('success', 'Album created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        // Pass the specific album to the view 'albums.show'
        return view('albums.show', compact('album'));
        $book->load('review.user');
        return view('albums.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        // Pass the specific album to the view 'albums.edit' for editing
        return view('albums.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string|max:255',
        'duration' => 'required|string|max:50',
        'number_of_songs' => 'required|integer|min:1',
        'release_year' => 'required|integer|between:1900,' . date('Y'),
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Update the album details
    $album->name = $request->name;
    $album->duration = $request->duration;
    $album->number_of_songs = $request->number_of_songs;
    $album->release_year = $request->release_year;

    // Handle image upload
    if ($request->hasFile('image')) {
        // Delete the old image if exists
        if ($album->image) {
            Storage::delete('public/' . $album->image);
        }

        // Store the new image and update the path in the database
        $imagePath = $request->file('image')->store('albums', 'public');
        $album->image = $imagePath;
    }

    // Save the updated album
    $album->save();

    // Redirect back with a success message
    return redirect()->route('album.index')->with('success', 'Album updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        // Delete the associated image if it exists in storage
        if ($album->image && Storage::exists('public/' . $album->image)) {
            Storage::delete('public/' . $album->image);
        }

        // Delete the album record from the database
        $album->delete();

        // Redirect back to the album index page with a success message
        return redirect()->route('album.index')->with('success', 'Album deleted successfully.');
    }
}
