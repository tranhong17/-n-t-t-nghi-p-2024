<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carts extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = 'mysql';
    protected $table = 'Carts';
    protected $guarded = [];
    protected $dates = ['delete_at'];
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
    ];

    // Định nghĩa mối quan hệ với bảng Products
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
