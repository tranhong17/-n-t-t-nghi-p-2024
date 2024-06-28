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
                    <a href="{{ route('provinces.index') }}">Quản lý các tỉnh thành</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Thêm tên các tỉnh thành</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">THÊM TÊN TỈNH THÀNH</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('provinces.store') }}" >
                            @csrf
                            <div class="form-group">
                                <label for="name">Tên tỉnh thành: </label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="type">Loại: </label>
                                <input type="text" class="form-control" name="type">
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug: </label>
                                <input type="text" class="form-control" name="slug">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">ADD PROVINCES</button>
                                <a href="{{ route('provinces.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
