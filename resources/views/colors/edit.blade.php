@extends('layout.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">MÀU SẮC</h3>
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
                    <a href="#">Quản lý màu sắc</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('colors.index') }}">Danh sách màu sắc</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Sửa tên màu sắc</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-10 ms-auto me-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">SỬA TÊN MÀU SẮC</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="p-4">
                                <form method="post" action="{{ route('colors.update', $colors->id) }}">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $colors->id }}">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="name">Tên màu sắc:</label>
                                        <div class="col-md-10">
                                            <input type="text" name="name" class="form-control" value="{{ $colors->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                                        <a href="{{ route('colors.index') }}" class="btn btn-secondary">Cancel</a>
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
