@extends('layout.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">XÃ/PHƯỜNG</h3>
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
                    <a href="#">Thêm tên xã/phường</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">THÊM TÊN XÃ/ PHƯỜNG</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('wards.store') }}" >
                            @csrf
                            <div class="form-group">
                                <label for="name">Tên xã/phường: </label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="type">Loại: </label>
                                <input type="text" class="form-control" name="type" >
                            </div>
                            <div class="form-group">
                                <label for="d_id">Quận/huyện: </label>
                                <select name="d_id" class="form-control" required>
                                    @foreach($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">ADD DISSTRICTS</button>
                                <a href="{{ route('wards.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
