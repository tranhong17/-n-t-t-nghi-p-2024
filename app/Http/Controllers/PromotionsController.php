<?php

namespace App\Http\Controllers;

use App\Models\Promotions;
use App\Http\Requests\StorePromotionsRequest;
use App\Http\Requests\UpdatePromotionsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PromotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promotion = new Promotions();
        $promotions = $promotion->index();
        return view('promotions.index', [
            'promotions' => $promotions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePromotionsRequest $request)
    {
        $promotion = new Promotions();
        $promotion->name = $request->name;
        $promotion->promo_code = $request->promo_code;
        $promotion->contents = $request->contents;
        $promotion->start_date = $request->start_date;
        $promotion->end_date = $request->end_date;
        $promotion->promotion_type = $request->promotion_type;
        $promotion->promotion_value = $request->promotion_value;
        $promotion->conditions = $request->conditions;
        $promotion->status = $request->status;
        $promotion->url = $request->url;
        $promotion->store();
        return Redirect::route('promotions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promotions $promotions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promotions $promotions, $id)
    {
        $promotions = Promotions::findOrFail($id);
        return view('promotions.edit', [
            'promotion' => $promotions
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePromotionsRequest $request, Promotions $promotions)
    {
        $promotions->id = $request->id;
        $promotions->name = $request->name;
        $promotions->promo_code = $request->promo_code;
        $promotions->contents = $request->contents;
        $promotions->start_date = $request->start_date;
        $promotions->end_date = $request->end_date;
        $promotions->promotion_type = $request->promotion_type;
        $promotions->promotion_value = $request->promotion_value;
        $promotions->conditions = $request->conditions;
        $promotions->status = $request->status;
        $promotions->url = $request->url;
        $promotions->updatePromotion();
        return Redirect::route('promotions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promotions $promotions, $id)
    {
        $promotions = Promotions::findOrFail($id);
        $promotions->delete();
        return Redirect::route('promotions.index');
    }
    public function restore(Request $request){
        $promotion = Promotions::withTrashed()->findOrFail($request->id);
        $promotion->restore();
        return Redirect::route('promotions.index');
    }
}
