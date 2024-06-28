<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = 'mysql';
    protected $table = 'categories';
    protected $guarded = [];
    protected $dates = ['deleted_at'];
    public $timestamps = false;

    public function index(){
        $categories = DB::table('categories')
            ->get();
        return $categories;
    }

    public function store(){
        DB::table('categories')
            ->insert([
                'name' => $this->name
            ]);
    }

    public function edit(){
        $categories = DB::table('categories')
            ->where('id', $this->id)
            ->get();

        return $categories;
    }

    public function updateCategories(){
        DB::table('categories')
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
