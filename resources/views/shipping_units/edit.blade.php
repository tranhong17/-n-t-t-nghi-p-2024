@extends('layout.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">ĐƠN VỊ VẬN CHUYỂN</h3>
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
                    <a href="#">Quản lý đơn vị vận chuyển</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('shipping_units.index') }}">Danh sách đơn vị vận chuyển</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">sửa đơn vị vận chuyển</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-10 ms-auto me-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">SỬA ĐƠN VỊ VẬN CHUYỂN</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="p-4">
                                <form method="post" action="{{ route('shipping_units.update', $shipping_units->id) }}">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $shipping_units->id }}">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="name">Tên đơn vị vận chuyển:</label>
                                        <div class="col-md-10">
                                            <input type="text" name="name" class="form-control" value="{{ $shipping_units->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="url">Đường dẫn (URL): </label>
                                        <input type="text" class="form-control" name="url" value="{{ $shipping_units->url }}">
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                                        <a href="{{ route('shipping_units.index') }}" class="btn btn-secondary">Cancel</a>
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
