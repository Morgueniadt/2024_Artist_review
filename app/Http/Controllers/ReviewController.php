<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     * (List reviews for a specific album)
     */
    public function index(Album $album)
    {
        // Show all reviews for a specific album
        $reviews = $album->reviews()->with('user')->get(); // eager load 'user' to avoid N+1 query problem
        return view('reviews.index', compact('album', 'reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Album $album)
    {
        // Pass the album to the review creation view
        return view('reviews.create', compact('album'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
            'album_id' => 'nullable|exists:albums,id',
            'song_id' => 'nullable|exists:songs,id',
        ]);
    
        // Ensure that either album_id or song_id is filled, but not both
        if ($request->album_id && $request->song_id) {
            return redirect()->back()->withErrors('You can only review either an album or a song, not both.');
        }
    
        if (!$request->album_id && !$request->song_id) {
            return redirect()->back()->withErrors('You must select either an album or a song to review.');
        }
    
        // Create the review
        Review::create([
            'user_id' => auth()->id(),
            'rating' => $validated['rating'],
            'comment' => $validated['comment'], // Ensure this is being passed
            'album_id' => $request->album_id,
            'song_id' => $request->song_id,
        ]);
    
        return redirect()->route('reviews.index');
    }
    
    

    /**
     * Display the specified resource.
     * (View a single review, if needed)
     */
    public function show(Review $review)
    {
        // Show the review's details
        return view('reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        // Fetch the album related to the review
        $album = $review->album;

        // Make sure the user is the one who created the review, or an admin
        if ($review->user_id != auth()->id() && !auth()->user()->isAdmin()) {
            return redirect()->route('album.show', $album)->with('error', 'You are not authorized to edit this review.');
        }

        // Pass the album and review to the edit view
        return view('reviews.edit', compact('review', 'album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        // Make sure the user is the one who created the review, or an admin
        if ($review->user_id != auth()->id() && !auth()->user()->isAdmin()) {
            return redirect()->route('album.show', $review->album)->with('error', 'You are not authorized to update this review.');
        }

        // Validate the request
        $request->validate([
            'rating' => 'required|integer|min:1|max:5', // Rating between 1 and 5
            'comment' => 'nullable|string|max:1000',   // Optional comment with a max length of 1000 characters
        ]);

        // Update the review
        $review->update([
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment'),
        ]);

        // Redirect back to the album's page with a success message
        return redirect()->route('album.show', $review->album)->with('success', 'Review updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        // Make sure the user is the one who created the review, or an admin
        if ($review->user_id != auth()->id() && !auth()->user()->isAdmin()) {
            return redirect()->route('album.show', $review->album)->with('error', 'You are not authorized to delete this review.');
        }

        // Delete the review
        $review->delete();

        // Redirect back to the album's page with a success message
        return redirect()->route('album.show', $review->album)->with('success', 'Review deleted successfully.');
    }
}
    