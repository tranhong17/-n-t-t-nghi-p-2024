<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Http\Requests\StoreCartsRequest;
use App\Http\Requests\UpdateCartsRequest;
use App\Models\Products;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems = Carts::where('user_id', Auth::id())->with('product')->get();
        return view('cart.index', compact('cartItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Products::all();
        return view('cart.store', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCartsRequest $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);
        $cart = Carts::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
            ],
            [
                'quantity' => DB::raw('quantity + ' . $request->quantity),
            ]
        );

        return redirect()->route('cart.index')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carts $carts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carts $carts, Request $request)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = Carts::where('user_id', Auth::id())->where('id', $request->id)->firstOrFail();
        $cart->update(['quantity' => $request->quantity]);

        return redirect()->route('cart.index')->with('success', 'Giỏ hàng đã được cập nhật.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartsRequest $request, Carts $carts)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = Carts::where('user_id', Auth::id())->where('id', $request->id)->firstOrFail();
        $cart->update(['quantity' => $request->quantity]);

        return redirect()->route('cart.index')->with('success', 'Giỏ hàng đã được cập nhật.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carts $carts, Request $request)
    {
        $cart = Carts::where('user_id', Auth::id())->where('id', $request->id)->firstOrFail();
        $cart->delete();

        return Redirect::route('cart.index');
    }
}
