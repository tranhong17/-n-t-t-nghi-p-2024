<?php

namespace App\Http\Controllers;


use App\Models\Customers;
use App\Http\Requests\StoreCustomersRequest;
use App\Http\Requests\UpdateCustomersRequest;
//use http\Env\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //$customers = Customers::paginate(10);
        // Tạo đối tượng của model
        $cus = new Customers();
        // Gọi đến fuction index ở trong model để lấy dữ liệu
        $customers = $cus->index();

        // Trả về view và gửi theo dữ liệu
        return view('customers.index',[
            'customers' => $customers
        ]);
    }
    public function trashed()
    {
        $trashedCustomers = Customers::onlyTrashed()->get();
        return view('customers.trashed', compact('trashedCustomers'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Gọi đến view create
        return view('customers.create');
    }

    /**
     * Display the specified resource.
     */
    public function store(StoreCustomersRequest $request){
        $cus = new Customers();
        $cus->name = $request->name;
        $cus->phone = $request->phone;
        $cus->email = $request->email;
        $cus->password = $request->password;
        $cus->store();
        return Redirect::route('customers.index');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //Tạo đối tượng
//        $cus = new Customers();
//        //Lấy dữ liệu dựa trên id
//        $cus->id = $request->id;
//        //$customer = $customers->edit();
//        // Gọi đến function lấy bản ghi theo id ở trong model
//        $customers = $cus->edit();
//        //Hiển thị view edit với dữ liệu đã được lấy
//        return view('customers.edit', [
//            'customers' => $customers
//        ]);
        // Tìm khách hàng theo ID và trả về đối tượng duy nhất
        $customer = Customers::findOrFail($id);

        // Trả về view và truyền đối tượng khách hàng vào view
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomersRequest $request, Customers $customers)
    {
        //Tạo đối tượng mới
        $customer = new Customers();
        //Lấy dữ liệu
        $customer->id = $request->id;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->password = $request->password;
        //Gọi function update dữ liệu ở trong model
        $customer->updateCustomer();
        //Quay về route danh sách
        return Redirect::route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
//    public function destroy(Customers $customer)
//    {
//        $customer->delete();
//        return Redirect::route('customers.index');
//    }

    /**
     * Hiển thị danh sách khách hàng đã xóa mềm.
     */

//    public function destroy(Customers $customers, Request $request)
//    {
//        //Tạo đối tượng
//        $cus = new Customers();
//        //Lấy id của bản ghi cần xóa
//        $cus->id = $request->id;
//        //Gọi dunction xóa bản ghi trong model
//        $cus->delete();
//        //Quay về route danh sách
//        return Redirect::route('customers.index');
//    }
    public function softDelete(Request $request)
    {
        $customer = Customers::findOrFail($request->id);
        $customer->delete(); // Xóa mềm bản ghi
        return Redirect::route('customers.index');
    }

    // Phương thức để khôi phục khách hàng từ thùng rác
    public function restore(Request $request)
    {
        $customer = Customers::withTrashed()->findOrFail($request->id);
        $customer->restore();
        return Redirect::route('customers.index');
    }
}
