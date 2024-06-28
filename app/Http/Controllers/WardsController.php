<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use App\Models\Wards;
use App\Http\Requests\StoreWardsRequest;
use App\Http\Requests\UpdateWardsRequest;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Redirect;

class WardsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wards = Wards::with('district')->withTrashed()->get();
        return view('wards.index', [
            'wards' => $wards
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $districts = Districts::all();
        return view('wards.create', [
            'districts' => $districts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWardsRequest $request)
    {
        $ward = new Wards();
        $ward->name = $request->name;
        $ward->type = $request->type;
        $ward->d_id = $request->d_id;
        $ward->save();
        return Redirect::route('wards.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wards $wards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wards $wards, Request $request)
    {
        $ward = Wards::findOrFail($request->id);
        $districts = Districts::all();
        return view('wards.edit', [
            'districts' => $districts,
            'ward' => $ward
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWardsRequest $request, Wards $wards)
    {
        $wards->id = $request->id;
        $wards->name = $request->name;
        $wards->type = $request->type;
        $wards->d_id = $request->d_id;
        $wards->save();
        return Redirect::route('wards.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wards $wards, $id)
    {
        $wards = Wards::findOrFail($id);
        $wards->delete();
        return Redirect::route('wards.index');
    }
    public function restore($id)
    {
        $ward = Wards::withTrashed()->findOrFail($id);
        $ward->restore();
        return Redirect::route('wards.index');
    }
}
