<?php

namespace App\Http\Controllers;

use App\Models\Shipping_units;
use App\Http\Requests\StoreShipping_unitsRequest;
use App\Http\Requests\UpdateShipping_unitsRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ShippingUnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shipping_unit = new Shipping_units();
        $shipping_units = $shipping_unit->index();
        return view('shipping_units.index', [
            'shipping_units' => $shipping_units
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shipping_units.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShipping_unitsRequest $request)
    {
        $shipping_unit = new Shipping_units();
        $shipping_unit->name = $request->name;
        $shipping_unit->url = $request->url;
        $shipping_unit->store();
        return Redirect::route('shipping_units.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shipping_units $shipping_units)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shipping_units $shipping_units, $id)
    {
        $shipping_unit = Shipping_units::findOrFail($id);
        return view('shipping_units.edit', [
            'shipping_units' => $shipping_unit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShipping_unitsRequest $request, Shipping_units $shipping_units)
    {
        $shipping_units->id = $request->id;
        $shipping_units->name = $request->name;
        $shipping_units->url = $request->url;
        $shipping_units->updateShipping();
        return Redirect::route('shipping_units.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shipping_units $shipping_units, $id)
    {
        $shipping_unit = Shipping_units::findOrFail($id);
        $shipping_unit->delete();
        return Redirect::route('shipping_units.index');
    }
    public function restore(Request $request){
        $shipp = Shipping_units::withTrashed()->findOrFail($request->id);
        $shipp->restore();
        return Redirect::route('shipping_units.index');
    }
}
