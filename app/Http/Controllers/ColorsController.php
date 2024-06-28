<?php

namespace App\Http\Controllers;

use App\Models\Colors;
use App\Http\Requests\StoreColorsRequest;
use App\Http\Requests\UpdateColorsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ColorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $color = new Colors();
        $colors = $color->index();

        return view('colors.index', [
            'colors' => $colors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('colors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreColorsRequest $request)
    {
        $color = new Colors();
        $color->name = $request->name;
        $color->store();

        return Redirect::route('colors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Colors $colors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Colors $colors, $id)
    {
        $colors = Colors::findOrFail($id);
        return view('colors.edit', [
            'colors' => $colors
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateColorsRequest $request, Colors $colors)
    {
        $colors->id = $request->id;
        $colors->name = $request->name;
        $colors->updateColors();
        return Redirect::route('colors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Colors $colors, $id)
    {
        $colors = Colors::findOrFail($id);
        $colors->delete();
        return Redirect::route('colors.index');
    }
    public function restore(Request $request){
        $color = Colors::withTrashed()->findOrFail($request->id);
        $color->restore();
        return Redirect::route('colors.index');
    }
}
