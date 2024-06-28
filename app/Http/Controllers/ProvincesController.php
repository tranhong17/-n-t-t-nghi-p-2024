<?php

namespace App\Http\Controllers;

use App\Models\Provinces;
use App\Http\Requests\StoreProvincesRequest;
use App\Http\Requests\UpdateProvincesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProvincesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $province = new Provinces();
        $provinces = $province->index();

        return view('provinces.index',[
            'provinces' => $provinces
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('provinces.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProvincesRequest $request)
    {
        $province = new Provinces();
        $province->name = $request->name;
        $province->type = $request->type;
        $province->slug = $request->slug;
        $province->store();
        return Redirect::route('provinces.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Provinces $provinces)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provinces $provinces, $id)
    {
        $provinces = Provinces::findOrFail($id);
        return view('provinces.edit', [
            'province' => $provinces
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProvincesRequest $request, Provinces $provinces)
    {
        $provinces->id = $request->id;
        $provinces->name = $request->name;
        $provinces->type = $request->type;
        $provinces->slug = $request->slug;
        $provinces->updateProvinces();
        return Redirect::route('provinces.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provinces $provinces, $id)
    {
        $provinces = Provinces::findOrFail($id);
        $provinces->delete();
        return Redirect::route('provinces.index');

    }
    public function restore(Request $request){
        $province = Provinces::withTrashed()->findOrFail($request->id);
        $province->restore();
        return Redirect::route('provinces.index');
    }
}
