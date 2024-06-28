@extends('layout.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">VẬN CHUYỂN</h3>
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
                    <a href="{{ route('shipping_units.index') }}">Quản lý đơn vị vận chuyển</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Thêm đơn vị vận chuyển</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">THÊM ĐƠN VỊ VẬN CHUYỂN</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('shipping_units.store') }}" >
                            @csrf
                            <div class="form-group">
                                <label for="name">Tên đơn vị vận chuyển: </label>
                                <input type="text" class="form-control" name="name" >
                            </div>
                            <div class="form-group">
                                <label for="url">Đường dẫn (URL): </label>
                                <input type="text" class="form-control" name="url">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">ADD SHIPPING UNITS</button>
                                <a href="{{ route('shipping_units.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
