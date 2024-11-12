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
        if (auth()->user()->role !== 'admin'){
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Image must be a valid file type and within size limit
        ]);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension(); // Generate a unique name for the image file
            $request->image->move(public_path('images/albums'), $imageName); // Move the image to the designated directory
        }

        // Create a new album record in the database
        Album::create([
            'name' => $request->name,
            'duration' => $request->duration,
            'number_of_songs' => $request->number_of_songs,
            'release_year' => $request->release_year,
            'image' => isset($imageName) ? 'images/albums/' . $imageName : null, // Store image path if available
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect back to the album index page with a success message
        return to_route('album.index')->with('success', 'Album created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        // Pass a single album to the view 'albums.show'
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
        // Validate the form input for updating an album
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image field is optional
            'duration' => 'required|string',
            'release_year' => 'required|integer|digits:4', // Ensure it's a valid 4-digit year
            'number_of_songs' => 'required|integer',
        ]);

        // Only update specified fields
        $data = $request->only(['name', 'duration', 'release_year', 'number_of_songs']);

        // Handle image upload if a new one is provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($album->image) {
                Storage::delete('public/' . $album->image);
            }

            // Attempt to store the new image and update the image path in data
            try {
                $data['image'] = $request->file('image')->store('albums', 'public');
            } catch (\Exception $e) {
                // Return back if there is an error in uploading the image
                return back()->withErrors(['image' => 'Image upload failed. Please try again.']);
            }
        }

        // Update the album record with new data
        $album->update($data);

        // Redirect back to the album index page with a success message
        return redirect()->route('album.index')->with('success', 'Album updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        // Delete the associated image if it exists in storage
        if ($album->image) {
            Storage::delete('public/' . $album->image);
        }

        // Delete the album record from the database
        $album->delete();

        // Redirect back to the album index page with a success message
        return redirect()->route('album.index')->with('success', 'Album deleted successfully.');
    }
}
