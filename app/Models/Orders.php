<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    // Định nghĩa mối quan hệ với bảng Customers
    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }

    // Định nghĩa mối quan hệ với bảng Promotions
    public function promotion()
    {
        return $this->belongsTo(Promotions::class);
    }

    // Định nghĩa mối quan hệ với bảng ShippingUnits
    public function shippingUnit()
    {
        return $this->belongsTo(Shipping_units::class);
    }

    // Định nghĩa mối quan hệ với bảng Wards
    public function ward()
    {
        return $this->belongsTo(Wards::class);
    }

    // Định nghĩa mối quan hệ với bảng Districts
    public function district()
    {
        return $this->belongsTo(Districts::class);
    }

    // Định nghĩa mối quan hệ với bảng Provinces
    public function province()
    {
        return $this->belongsTo(Provinces::class);
    }

    // Định nghĩa mối quan hệ với bảng PaymentMethods
    public function payments()
    {
        return $this->belongsTo(Payments::class);
    }

    // Định nghĩa mối quan hệ với bảng OrderDetails
    public function orderDetails()
    {
        return $this->hasMany(Orderdetails::class, 'order_id');
    }
}
