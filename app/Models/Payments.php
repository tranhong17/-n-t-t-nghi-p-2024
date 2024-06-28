<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Payments extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = 'mysql';
    protected $table = 'payments';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function index(){
        $payments = DB::table('payments')
            ->get();
        return $payments;
    }

    public function store(){
        DB::table('payments')
            ->insert([
                'name' => $this->name
            ]);
    }

    public function edit(){
        $payments = DB::table('payments')
            ->where('id', $this->id)
            ->get();
        return $payments;
    }
    public function updatePay(){
        DB::table('payments')
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
