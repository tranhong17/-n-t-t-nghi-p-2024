<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Customers extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = 'mysql';
    protected $table = 'customers';
    protected $guarded = [];
    protected $dates = ['deleted_at'];
    public $timestamps = false;

    public function index(){
        // query để lấy dữ liệu
        $customers = DB::table('customers')
            ->get();
        //Trả về dữ liệu
        return $customers;
    }

    // function lưu dữ liệu được thêm lên db
    public function store(){
        //Query builder dùng để lưu dữ liệu
        DB::table('customers')
            ->insert([
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'password' => $this->password
            ]);
    }
    //function lấy dữ liệu theo id
    public function edit(){
        // Lấy bản ghi theo id
        $customers = DB::table('customers')
                ->where('id', $this->id)
                ->get();
        // Trả về dữ liệu đã lấy
        return $customers;
    }

    //function update dữ liệu
    public function updateCustomer(){
        //query builder để update dữ liệu
        DB::table('customers')
            ->where('id', $this->id)
            ->update([
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'password' => $this->password
            ]);
    }
    // function xóa bản ghi
//    public function destroyCustomer(){
//        //query bulder để xóa bản ghi theo id
//        DB::table('customers')
//            ->where('id', $this->id)
//            ->delete();
//    }
    public function delete()
    {
        $this->deleted_at = now();
        $this->update(['deleted_at' => $this->deleted_at]);
    }
}
