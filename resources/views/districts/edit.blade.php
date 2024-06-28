@extends('layout.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">QUẬN/HUYỆN</h3>
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
                    <a href="{{ route('districts.index') }}">Quản lý các quận/huyện</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Sửa tên quận/huyện</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">SỬA TÊN QUẬN/HUYỆN</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('districts.update', $district->id) }}" >
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Tên quận/huyện: </label>
                                <input type="text" class="form-control" name="name" value="{{ $district->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="type">Loại: </label>
                                <input type="text" class="form-control" name="type" value="{{ $district->type }}" required>
                            </div>
                            <div class="form-group">
                                <label for="p_id">Tỉnh: </label>
                                <select name="p_id" class="form-control" required>
                                    @foreach($provinces as $province)
                                    <option value="{{ $province->id }}" {{ $district->province->id == $province->id ? 'selected' : '' }}>{{ $province->name }}</option>
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
