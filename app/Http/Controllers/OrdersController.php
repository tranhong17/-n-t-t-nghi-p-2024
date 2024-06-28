<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Districts;
use App\Models\Orderdetails;
use App\Models\Orders;
use App\Http\Requests\StoreOrdersRequest;
use App\Http\Requests\UpdateOrdersRequest;
use App\Models\Payments;
use App\Models\Products;
use App\Models\Promotions;
use App\Models\Provinces;
use App\Models\Reviews;
use App\Models\Shipping_units;
use App\Models\Wards;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Orders::with([
            'promotion',
            'province',
            'ward',
            'district',
            'payments',
            'shippingUnit',
            'customer'
        ])->get();

        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customers::all();
        $promotions = Promotions::all();
        $shippingUnits = Shipping_units::all();
        $wards = Wards::all();
        $districts = Districts::all();
        $provinces = Provinces::all();
        $payments = Payments::all();
        $products = Products::all();
        return view('orders.create', compact('customers', 'promotions', 'shippingUnits', 'wards', 'districts', 'provinces', 'payments', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrdersRequest $request)
    {
        // Tạo mới đơn hàng
        $order = Orders::create([
            'customer_id' => $request->customer_id,
            'promotion_id' => $request->promotion_id,
            'shipping_unit_id' => $request->shipping_unit_id,
            'ward_id' => $request->ward_id,
            'district_id' => $request->district_id,
            'province_id' => $request->province_id,
            'payment_id' => $request->payment_method_id,
            'total_price' => 0,
            'status' => $request->status,
        ]);

        // Tính tổng giá và tạo chi tiết đơn hàng
        $totalPrice = 0;
        foreach ($request->products as $productData) {
            $product = Products::findOrFail($productData['id']);
            $quantity = $productData['quantity'];
            $price = $product->price * $quantity;

            Orderdetails::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => $quantity,
                'price' => $product->price,
            ]);

            $totalPrice += $price;
        }

        // Cập nhật tổng giá cho đơn hàng
        $order->update(['total_price' => $totalPrice]);

        return redirect()->route('orders.index')->with('success', 'Đơn hàng đã được tạo thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders $orders, Reviews $reviews)
    {
        $order = Orders::findOrFail($reviews->id);
        $customers = Customers::all();
        $promotions = Promotions::all();
        $shippingUnits = Shipping_units::all();
        $wards = Wards::all();
        $districts = Districts::all();
        $provinces = Provinces::all();
        $payments = Payments::all();
        $products = Products::all();
        return view('orders.edit', compact('order', 'customers', 'promotions', 'shippingUnits', 'wards', 'districts', 'provinces', 'payments', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrdersRequest $request, Orders $orders)
    {
        $order = Orders::findOrFail($request->id);

        // Cập nhật đơn hàng
        $order->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'tracking_number' => $request->tracking_number,
            'customer_id' => $request->customer_id,
            'promotion_id' => $request->promotion_id,
            'shipping_unit_id' => $request->shipping_unit_id,
            'ward_id' => $request->ward_id,
            'district_id' => $request->district_id,
            'province_id' => $request->province_id,
            'payment_method_id' => $request->payment_method_id,
            'status' => $request->status,
            'date' => $request->date,
        ]);
        // Xóa chi tiết đơn hàng cũ và tạo mới
        $order->orderDetails()->delete();
        $totalPrice = 0;
        foreach ($request->products as $productData) {
            $product = Products::findOrFail($productData['id']);
            $quantity = $productData['quantity'];
            $price = $product->price * $quantity;

            Orderdetails::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => $quantity,
                'price' => $product->price,
            ]);

            $totalPrice += $price;
        }

        // Cập nhật tổng giá cho đơn hàng
        $order->update(['total_price' => $totalPrice]);

        return redirect()->route('orders.index')->with('success', 'Đơn hàng đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orders $orders, Request $request)
    {
        $order = Orders::findOrFail($request->id);
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Đơn hàng đã được xóa thành công.');
    }
}
