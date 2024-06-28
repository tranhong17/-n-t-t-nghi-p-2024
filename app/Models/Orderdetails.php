<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];

    // Định nghĩa mối quan hệ với bảng Orders
    public function order()
    {
        return $this->belongsTo(Orderdetails::class, 'order_id');
    }

    // Định nghĩa mối quan hệ với bảng Products
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }

}
