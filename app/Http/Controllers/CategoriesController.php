<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = new Categories();
        $categories = $category->index();


        return view('categories.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriesRequest $request)
    {
        $cate = new Categories();
        $cate->name = $request->name;
        $cate->store();

        return Redirect::route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Categories::findOrFail($id);
        return view('categories.edit', [
            'categories' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriesRequest $request, Categories $categories)
    {
        $categories->id = $request->id;
        $categories->name = $request->name;

        $categories->updateCategories();
        return Redirect::route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Categories::findOrFail($id);
        $category->delete();

        return Redirect::route('categories.index');
    }
    public function restore(Request $request){
        $category = Categories::withTrashed()->findOrFail($request->id);
        $category->restore();
        return Redirect::route('categories.index');
    }
}
