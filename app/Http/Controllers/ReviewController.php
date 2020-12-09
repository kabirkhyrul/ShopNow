<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ReviewStoreRequest;
use App\Http\Requests\ReviewUpdateRequest;

class ReviewController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Review::class);

        $search = $request->get('search', '');

        $reviews = Review::search($search)
            ->latest()
            ->paginate();

        return view('app.reviews.index', compact('reviews', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Review::class);

        $products = Product::pluck('name', 'id');
        $users = User::pluck('name', 'id');

        return view('app.reviews.create', compact('products', 'users'));
    }

    /**
     * @param \App\Http\Requests\ReviewStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewStoreRequest $request)
    {
        $this->authorize('create', Review::class);

        $validated = $request->validated();

        $review = Review::create($validated);

        return redirect()
            ->route('reviews.edit', $review)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Review $review
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Review $review)
    {
        $this->authorize('view', $review);

        return view('app.reviews.show', compact('review'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Review $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Review $review)
    {
        $this->authorize('update', $review);

        $products = Product::pluck('name', 'id');
        $users = User::pluck('name', 'id');

        return view('app.reviews.edit', compact('review', 'products', 'users'));
    }

    /**
     * @param \App\Http\Requests\ReviewUpdateRequest $request
     * @param \App\Models\Review $review
     * @return \Illuminate\Http\Response
     */
    public function update(ReviewUpdateRequest $request, Review $review)
    {
        $this->authorize('update', $review);

        $validated = $request->validated();

        $review->update($validated);

        return redirect()
            ->route('reviews.edit', $review)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Review $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Review $review)
    {
        $this->authorize('delete', $review);

        $review->delete();

        return redirect()
            ->route('reviews.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
