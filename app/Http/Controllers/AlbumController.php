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
    $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'duration' => 'required|string',
        'release_year' => 'required|date',
        'number_of_songs' => 'required|integer',
    ]);

    $album = new Album();
    $album->title = $request->title;
    $album->duration = $request->duration;
    $album->release_year = $request->release_year;
    $album->number_of_songs = $request->number_of_songs;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('albums', 'public');
        $album->image = $imagePath;
    }

    $album->save();

    return redirect()->route('albums.index')->with('success', 'Album created successfully.');
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
