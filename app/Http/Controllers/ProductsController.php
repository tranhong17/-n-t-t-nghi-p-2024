<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Categories;
use App\Models\Colors;
use App\Models\Products;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use Illuminate\http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::with(['brand', 'category', 'color']) // Load các liên kết từ các bảng liên quan
        ->orderBy('id', 'DESC') // Sắp xếp theo ID giảm dần hoặc theo thời gian tùy bạn
        ->get(); // Lấy danh sách sản phẩm từ cơ sở dữ liệu

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        $product = new Products();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        if ($request->hasFile('new_image')) {
            // Xóa ảnh cũ nếu tồn tại
            if ($product->image) {
                Storage::delete($product->image);
            }

            $newImage = $request->file('new_image');
            $path = $newImage->store('products', 'public'); // Lưu ảnh vào thư mục storage/app/public/products

            $product->image = $path;
        }

        $product->save();
        $product->status = $request->input('status');
        $product->color_id = $request->input('color_id');
        $product->brand_id = $request->input('brand_id');
        $product->category_id = $request->input('category_id');
        $product->save();

        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được thêm mới thành công.');


    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products, Request $request)
    {
        $product = Products::with('color', 'brand', 'category')->findOrFail($request->id);
        $colors = Colors::all();
        $brands = Brands::all();
        $categories = Categories::all();
        return view('products.edit', compact('product', 'colors', 'brands', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        $product = Products::findOrFail($request->id);
        $product->update($request->all());
        return Redirect::route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products, Request $request)
    {
        $product = Products::findOrFail($request->id);
        $product->delete();
        return Redirect::route('products.index');
    }
}
