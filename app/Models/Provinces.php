<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Provinces extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = 'mysql';
    protected $table = 'provinces';
    protected $guarded = [];
    protected $dates = ['delete_at'];

    public function index(){
        $provinces = DB::table('provinces')
            ->get();
        return $provinces;
    }
    public function store(){
        DB::table('provinces')
            ->insert([
                'name' => $this->name,
                'type' => $this->type,
                'slug' => $this->slug
            ]);
    }
    public function edit(){
        $provinces = DB::table('provinces')
            ->where('id', $this->id)
            ->get();
        return $provinces;
    }
    public function updateProvinces(){
        DB::table('provinces')
            ->where('id', $this->id)
            ->update([
                'name' => $this->name,
                'type' => $this->type,
                'slug' => $this->slug
            ]);
    }
    public function delete()
    {
        $this->deleted_at = now();
        $this->update(['deleted_at' => $this->deleted_at]);
    }

}
