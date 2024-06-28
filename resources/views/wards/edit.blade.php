@extends('layout.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">XÃ/ PHƯỜNG</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('wards.index') }}">Quản lý các xã/phường</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Sửa tên xã/ phường</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">SỬA TÊN XÃ/PHƯỜNG</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('wards.update', $ward->id) }}" >
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Tên xã/phường: </label>
                                <input type="text" class="form-control" name="name" value="{{ $district->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="type">Loại: </label>
                                <input type="text" class="form-control" name="type" value="{{ $district->type }}" required>
                            </div>
                            <div class="form-group">
                                <label for="district_id">Quận/Huyện: </label>
                                <select name="district_id" class="form-control" required>
                                    @foreach($districts as $district)
                                    <option value="{{ $district->id }}" {{ $ward->district_id == $district->id ? 'selected' : '' }}>{{ $district->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Cập nhật quận/huyện</button>
                                <a href="{{ route('districts.index') }}" class="btn btn-secondary">Hủy</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
