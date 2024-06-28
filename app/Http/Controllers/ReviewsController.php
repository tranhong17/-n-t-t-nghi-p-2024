<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use App\Http\Requests\StoreReviewsRequest;
use App\Http\Requests\UpdateReviewsRequest;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Redirect;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Reviews::orderBy('created_at', 'desc')->paginate(10);
        return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReviewsRequest $request)
    {
        $review = new Reviews();
        $review->id = $request->id;
        $review->customer_id = $request->customer_id;
        $review->product_id = $request->product_id;
        $review->rating = $request->rating;
        $review->contents = $request->contents;

        Reviews::create($request->all());

        return Redirect::route('reviews.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reviews $reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reviews $reviews, $id)
    {
        $review = Reviews::findOrFail($id);
        return view('reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewsRequest $request, Reviews $reviews)
    {
        $review = new Reviews();
        $review->id = $request->id;
        $review->customer_id = $request->customer_id;
        $review->product_id = $request->product_id;
        $review->rating = $request->rating;
        $review->contents = $request->contents;
        $review->update($request->all());

        return Redirect::route('reviews.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reviews $reviews, Request $request)
    {
        $review = Reviews::findOrFail($request->id);
        $review->delete();
        return Redirect::route('reviews.index');
    }

    public function search(Request $request)
    {
        // Logic để tìm kiếm đánh giá
        $searchTerm = $request->input('search');

        $reviews = Reviews::where('customer_id', 'like', '%' . $searchTerm . '%')
            ->orWhere('product_id', 'like', '%' . $searchTerm . '%')
            ->orWhere('rating', 'like', '%' . $searchTerm . '%')
            ->orWhere('content', 'like', '%' . $searchTerm . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('reviews.index', [
            'reviews' => $reviews
        ]);
    }
}
