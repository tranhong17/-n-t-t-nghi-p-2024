<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wards extends Model
{
    use HasFactory, SoftDeletes;
    protected $connection = 'mysql';
    protected $table = 'wards';

    protected $guarded = [];
    protected $dates = ['deleted_at'];

    protected $fillable = ['name', 'type', 'd_id'];

    public function district()
    {
        return $this->belongsTo(Districts::class, 'd_id', 'id');
    }

    public function delete()
    {
        $this->deleted_at = now();
        $this->update(['deleted_at' => $this->deleted_at]);
    }
}
