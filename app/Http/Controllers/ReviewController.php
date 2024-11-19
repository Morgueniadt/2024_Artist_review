<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     * (List reviews for a specific album or all reviews)
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
        // The create form is typically handled in the Blade view (no need for logic here).
        return view('reviews.create', compact('album'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Album $album)
    {
        // Validate the request data
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);
    
        // Create the review with album_id and user_id
        $album->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment'),
            'album_id' => $album->id, // Make sure to pass the correct album_id
        ]);
    
        // Redirect back with success message
        return redirect()->route('album.show', $album)->with('success', 'Review added successfully.');
    }

    /**
     * Display the specified resource.
     * (View a single review, if needed)
     */
    public function show(Review $review)
    {
        // If you want to show a single review (e.g., for admin or user profile)
        return view('reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        // Make sure the user is the one who created the review, or an admin.
        if ($review->user_id != auth()->id() && !auth()->user()->isAdmin()) {
            return redirect()->route('album.show', $review->album)->with('error', 'You are not authorized to edit this review.');
        }

        // Show the edit form
        return view('reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        // Make sure the user is the one who created the review, or an admin.
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
        // Make sure the user is the one who created the review, or an admin.
        if ($review->user_id != auth()->id() && !auth()->user()->isAdmin()) {
            return redirect()->route('album.show', $review->album)->with('error', 'You are not authorized to delete this review.');
        }

        // Delete the review
        $review->delete();

        // Redirect back to the album's page with a success message
        return redirect()->route('album.show', $review->album)->with('success', 'Review deleted successfully.');
    }
}
