<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Districts extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = 'mysql';
    protected $table = 'districts';

    protected $guarded = [];
    protected $dates = ['deleted_at'];

    protected $fillable = ['name', 'type', 'p_id'];

    public function province()
    {
        return $this->belongsTo(Provinces::class, 'p_id', 'id');
    }

    public function delete()
    {
        $this->deleted_at = now();
        $this->update(['deleted_at' => $this->deleted_at]);
    }
}
