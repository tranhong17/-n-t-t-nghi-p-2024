<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reviews extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = 'mysql';
    protected $table = 'reviews';
    protected $guarded = [];
    protected $dates = ['delete_at'];
    public $timestamps = false;
    protected $fillable = [
        'customer_id',
        'product_id',
        'rating',
        'content',
    ];

    // Định nghĩa mối quan hệ với bảng Customers
    public function customer()
    {
        return $this->belongsTo(Customers::class, 'customer_id');
    }

    // Định nghĩa mối quan hệ với bảng Products
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
