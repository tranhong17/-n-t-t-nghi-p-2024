<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'image', 'price', 'capacity', 'codeSKU', 'description', 'amount', 'status', 'date',
        'color_id', 'brand_id', 'category_id',
    ];

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }

    public function color()
    {
        return $this->belongsTo(Colors::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brands::class);
    }

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

}
