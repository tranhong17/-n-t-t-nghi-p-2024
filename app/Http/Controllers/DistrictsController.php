<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use App\Http\Requests\StoreDistrictsRequest;
use App\Http\Requests\UpdateDistrictsRequest;
use App\Models\Provinces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DistrictsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $district = new Districts();
//        $districts = $district->index();
        $districts = Districts::all(); // Lấy danh sách các quận/huyện từ CSDL

        return view('districts.index', [
            'districts' => $districts
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        $province = new Districts();
//        $provinces = $province->index();
        $provinces = Provinces::all();
        return view('districts.create', [
            'provinces' => $provinces
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDistrictsRequest $request)
    {
//        $district = new Districts();
//        $district->name = $request->name;
//        $district->type = $request->type;
//        $district->p_id = $request->p_id;
//        $district->store();
        // Validate dữ liệu từ request
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'p_id' => 'required|exists:provinces,id',
        ]);

        // Tạo một instance mới của Districts
        $district = new Districts();
        $district->name = $request->name;
        $district->type = $request->type;
        $district->p_id = $request->p_id;
        $district->save(); // Lưu vào CSDL

        // Redirect về danh sách quận huyện sau khi lưu thành công
        return Redirect::route('districts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Districts $districts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Districts $districts, Request $request)
    {
//        $province = new Districts();
//        $provinces = $province->index();
//        $district = new Districts();
//        $district->id = $request->id;
//        $districts = $district->edit();
        $district = Districts::findOrFail($request->id); // Lấy thông tin quận/huyện từ CSDL

        $provinces = Provinces::all(); // Lấy danh sách tỉnh/thành phố từ CSDL

        return view('districts.edit', [
            'provinces' => $provinces,
            'district' => $district
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDistrictsRequest $request, Districts $districts)
    {
        $district = Districts::findOrFail($request->id);
        $district->name = $request->name;
        $district->type = $request->type;
        $district->p_id = $request->p_id;
        $district->save();
//        $district = new Districts();
//        $district->id = $request->id;
//        $district->name = $request->name;
//        $district->type = $request->type;
//        $district->p_id = $request->p_id;
//        $district->updateDistrict();

        return Redirect::route('districts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Districts $districts, $id)
    {
        $districts = Districts::findOrFail($id);
        $districts->delete();

        return Redirect::route('districts.index');
    }
}
