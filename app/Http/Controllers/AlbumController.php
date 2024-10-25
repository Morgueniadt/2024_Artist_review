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
        $albums = Album::all();//fetch all alubms
        return view('albums.index', compact('albums'));// return the view with albums 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input
    $request->validate([
        'title' => 'required|string|max:255', // Album title validation
        'duration' => 'required|string|max:100', // Album duration validation
        'year' => 'required|integer', // Album year validation
        'number_of_songs' => 'required|integer|min:1', // Number of songs validation
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
    ]);

    // Initialize image name variable
    $imageName = null;

    // Check if the image is uploaded and handle it
    if ($request->hasFile('image')) {
        // Generate a unique name for the image
        $imageName = time() . '.' . $request->image->extension();
        // Move the uploaded image to the public directory
        $request->image->move(public_path('images/albums'), $imageName);
    }

    // Create an album record in the database
    Album::create([
        'title' => $request->title, // Store the album title
        'duration' => $request->duration, // Store the album duration
        'year' => $request->year, // Store the album year
        'number_of_songs' => $request->number_of_songs, // Store the number of songs
        'image' => $imageName, // Store the image filename in the DB
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Redirect to the index page with a success message
    return to_route('albums.index')->with('success', 'Album created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        return view('albums.show')->with('albums', $album);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
         $albums = Album::all();//fetch all alubms
         return view('albums.edit', compact('albums'));// return the view with albums    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        //
    }
}
