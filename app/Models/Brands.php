<?php

namespace App\Models;

use   Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Brands extends Model
{
    use HasFactory, SoftDeletes;
    protected $connection = 'mysql';
    protected $table = 'brands';
    protected $guarded = [];

    protected $dates = ['deleted_at'];
    public $timestamps = false;

    public function index(){
        $brands = DB::table('brands')
            ->get();
        return $brands;
    }

    public function store(){
        DB::table('brands')
            ->insert([
                'name' => $this->name
            ]);
    }

    public function edit(){
        $brands = DB::table('brands')
            ->where('id', $this->id)
            ->get();
        return $brands;
    }

    public function updateBrand(){
        DB::table('brands')
            ->where('id', $this->id)
            ->update([
                'name' => $this->name
            ]);
    }

    public function delete()
    {
        $this->deleted_at = now();
        $this->update(['deleted_at' => $this->deleted_at]);
    }
}
