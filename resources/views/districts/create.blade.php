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
                    <a href="#">Thêm tên quận/huyện</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">THÊM TÊN QUẬN/HUYỆN</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('districts.store') }}" >
                            @csrf
                            <div class="form-group">
                                <label for="name">Tên quận/huyện: </label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="type">Loại: </label>
                                <input type="text" class="form-control" name="type" required>
                            </div>
                            <div class="form-group">
                                <label for="p_id">Tỉnh: </label>
                                <select name="p_id" class="form-control" required>
                                    @foreach($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">ADD DISSTRICTS</button>
                                <a href="{{ route('districts.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
