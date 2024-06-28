<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Shipping_units extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = 'mysql';
    protected $table = 'shipping_units';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function index(){
        $shipping_units = DB::table('shipping_units')
            ->get();
        return $shipping_units;
    }

    public function store(){
        DB::table('shipping_units')
            ->insert([
                'name' => $this->name,
                'url' => $this->url
            ]);
    }

    public function edit(){
        $shipping_units = DB::table('shipping_units')
            ->where('id', $this->id)
            ->get();
        return $shipping_units;
    }

    public function updateShipping(){
        DB::table('shipping_units')
            ->where('id', $this->id)
            ->update([
                'name' => $this->name,
                'url' => $this->url
            ]);
    }
    public function delete()
    {
        $this->deleted_at = now();
        $this->update(['deleted_at' => $this->deleted_at]);
    }
}
