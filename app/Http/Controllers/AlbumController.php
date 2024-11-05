<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

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
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'duration' => 'required|string',
            'release_year' => 'required|date',
            'number_of_songs' => 'required|integer',
        ]);

        $album = new Album();
        $album->name = $request->title; // Assuming the column is 'name'
        $album->duration = $request->duration;
        $album->release_year = $request->release_year;
        $album->number_of_songs = $request->number_of_songs;

        $request->image->move(public_path('images'), $imageName);
        $album->image = 'images/'.$imageName;
        $album->save();

        return redirect()->route('albums.index')->with('success', 'Album created successfully.');
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
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Make image nullable
            'duration' => 'required|string',
            'release_year' => 'required|date',
            'number_of_songs' => 'required|integer',
        ]);

        $album->name = $request->title; // Update name
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