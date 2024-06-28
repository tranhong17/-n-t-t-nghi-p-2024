<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Promotions extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = 'mysql';
    protected $table = 'promotions';
    protected $guarded = [];
    protected $dates = ['delete_at'];
    public $timestamps = false;

    public function index(){
        $promotions = DB::table('promotions')
            ->get();
        return $promotions;
    }

    public function store(){
        DB::table('promotions')
            ->insert([
                'name' => $this->name,
                'promo_code' => $this->promo_code,
                'contents' => $this->contents,
                'start_date' => $this->start_date,
                'end_date' => $this->end_date,
                'promotion_type' => $this->promotion_type,
                'promotion_value' => $this->promotion_value,
                'conditions' => $this->conditions,
                'status' => $this->status,
                'url' => $this->url
            ]);
    }
    public function edit(){
        $promotions = DB::table('promotions')
            ->where('id', $this->id)
            ->get();
        return $promotions;
    }

    public function updatePromotion(){
        DB::table('promotions')
            ->where('id', $this->id)
            ->update([
                'name' => $this->name,
                'promo_code' => $this->promo_code,
                'contents' => $this->contents,
                'start_date' => $this->start_date,
                'end_date' => $this->end_date,
                'promotion_type' => $this->promotion_type,
                'promotion_value' => $this->promotion_value,
                'conditions' => $this->conditions,
                'status' => $this->status,
                'url' => $this->url
            ]);
    }
    public function delete()
    {
        $this->deleted_at = now();
        $this->update(['deleted_at' => $this->deleted_at]);
    }
}
