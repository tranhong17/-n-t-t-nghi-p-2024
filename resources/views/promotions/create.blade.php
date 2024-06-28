@extends('layout.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">KHUYẾN MÃI</h3>
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
                    <a href="{{ route('promotions.index') }}">Quản lý mã khuyến mãi</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Thêm mã khuyến mãi</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">THÊM MÃ KHUYẾN MÃI</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('promotions.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Tên khuyến mãi:</label>
                                <input type="text" class="form-control" name="name" >
                            </div>
                            <div class="form-group">
                                <label for="promo_code">Mã khuyến mãi:</label>
                                <input type="text" class="form-control" name="promo_code" >
                            </div>
                            <div class="form-group">
                                <label for="contents">Mô tả:</label>
                                <textarea type="text" class="form-control" name="contents"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="start_date">Ngày bắt đầu:</label>
                                <input type="date" class="form-control" name="start_date" >
                            </div>
                            <div class="form-group">
                                <label for="end_date">Ngày kết thúc:</label>
                                <input type="date" class="form-control" name="end_date" >
                            </div>
                            <div class="form-group">
                                <label for="promotion_type">Loại khuyến mãi:</label>
                                <select class="form-control" name="promotion_type" >
                                    <option value="discount">Giảm giá</option>
                                    <option value="gift">Quà tặng</option>
                                    <option value="free_shipping">Miễn phí vận chuyển</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="promotion_value">Giá trị khuyến mãi:</label>
                                <input type="number" step="0.01" class="form-control" name="promotion_value">
                            </div>
                            <div class="form-group">
                                <label for="conditions">Điều kiện:</label>
                                <textarea class="form-control" name="conditions"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="status">Trạng thái:</label>
                                <select class="form-control" name="status" >
                                    <option value="active">Hoạt động</option>
                                    <option value="inactive">Không hoạt động</option>
                                    <option value="expired">Hết hạn</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="url">URL:</label>
                                <input type="url" class="form-control" name="url">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Thêm mã khuyến mãi</button>
                                <a href="{{ route('promotions.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
