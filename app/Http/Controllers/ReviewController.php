<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Album $album)
{
    // Validate the request
    $request->validate([
        'rating' => 'required|integer|min:1|max:5', // Rating between 1 and 5
        'comment' => 'nullable|string|max:1000',   // Optional comment with a max length of 1000 characters
    ]);

    // Create the review associated with the album and user
    $album->reviews()->create([
        'user_id' => auth()->id(),                     // Current authenticated user ID
        'rating' => $request->input('rating'),         // Rating from the request
        'comment' => $request->input('comment'),       // Comment from the request (nullable)
        'album_id' => $album->id,                      // Album ID (this is passed via the route)
    ]);

    // Redirect back to the album's page with a success message
    return redirect()->route('album.show', $album)->with('success', 'Review added successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
