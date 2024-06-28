<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Http\Requests\StoreBrandsRequest;
use App\Http\Requests\UpdateBrandsRequest;
//use http\Env\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brands::withTrashed()->get();

        return view('brands.index', [
                'brands' => $brands
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandsRequest $request)
    {
        $brands = new Brands();
        $brands->name = $request->name;
        $brands->store();
        return Redirect::route('brands.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brands $brands)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brands $brands, $id)
    {
        $brand = new Brands();
        $brand = Brands::findOrFail($id);
        return view('brands.edit', [
            'brand' => $brand
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandsRequest $request, Brands $brands)
    {
        $brands->id = $request->id;
        $brands->name = $request->name;
        $brands->updateBrand();
        return Redirect::route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brands $brands, $id)
    {
        // Xóa thương hiệu
        $brands = Brands::findOrFail($id);
        $brands->delete();

        // Chuyển hướng về trang danh sách thương hiệu
        return redirect::route('brands.index');
    }
    public function restore(Request $request)
    {
        $brand = Brands::withTrashed()->findOrFail($request->id);
        $brand->restore();
        return Redirect::route('brands.index');
    }

}
