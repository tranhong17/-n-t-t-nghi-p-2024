@extends('layout.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">TỈNH THÀNH</h3>
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
                    <a href="#">Quản lý các tỉnh thành</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('provinces.index') }}">Danh sách các tỉnh thành</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Sửa tên các tỉnh thành</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-10 ms-auto me-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">SỬA TÊN các tỉnh thành</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="p-4">
                                <form method="post" action="{{ route('provinces.update', $province->id) }}">
                                    @method('put')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $province->id }}">
                                    <div class="form-group">
                                        <label for="name">Tên tỉnh thành: </label>
                                        <input type="text" class="form-control" name="name" value="{{ $province->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Loại: </label>
                                        <input type="text" class="form-control" name="type" value="{{ $province->type }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug: </label>
                                        <input type="text" class="form-control" name="slug" value="{{ $province->slug }}">
                                    </div>

                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary">Cập nhật tỉnh thành</button>
                                        <a href="{{ route('provinces.index') }}" class="btn btn-secondary">Hủy</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
