<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Colors extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = 'mysql';
    protected $table = 'colors';

    protected $guarded = [];

    protected  $dates = ['deleted_at'];

    public function index(){
        $colors = DB::table('colors')
            ->get();
        return $colors;
    }

    public function store(){
        DB::table('colors')
            ->insert([
                'name' => $this->name
            ]);
    }

    public function edit(){
        $colors = DB::table('colors')
            ->where('id', $this->id)
            ->get();
        return $colors;
    }

    public function updateColors(){
        DB::table('colors')
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
