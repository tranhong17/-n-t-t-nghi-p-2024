@extends('layout.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">CHỈNH SỬA ĐƠN HÀNG #{{ $order->id }}</h3>
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
                    <a href="#">Quản lý đơn hàng</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('orders.index') }}">Danh sách đơn hàng</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <span>Chỉnh sửa đơn hàng</span>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">THÔNG TIN ĐƠN HÀNG</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('orders.update', $order->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Tên khách hàng</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $order->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Số điện thoại</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $order->phone }}" required>
                            </div>

                            <div class="form-group">
                                <label for="tracking_number">Mã theo dõi</label>
                                <input type="text" class="form-control" id="tracking_number" name="tracking_number" value="{{ $order->tracking_number }}" required>
                            </div>

                            <div class="form-group">
                                <label for="status">Trạng thái</label>
                                <input type="text" class="form-control" id="status" name="status" value="{{ $order->status }}" required>
                            </div>

                            <div class="form-group">
                                <label for="date">Ngày</label>
                                <input type="date" class="form-control" id="date" name="date" value="{{ $order->date }}" required>
                            </div>

                            <div class="form-group">
                                <label for="promotion_id">Mã giảm giá</label>
                                <select class="form-control" id="promotion_id" name="promotion_id">
                                    <option value="">-- Chọn mã giảm giá --</option>
                                    @foreach($promotions as $promotion)
                                    <option value="{{ $promotion->id }}" {{ $order->promotion_id == $promotion->id ? 'selected' : '' }}>{{ $promotion->code }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="province_id">Tỉnh/Thành phố</label>
                                <select class="form-control" id="province_id" name="province_id">
                                    <option value="">-- Chọn tỉnh/thành phố --</option>
                                    @foreach($provinces as $province)
                                    <option value="{{ $province->id }}" {{ $order->province_id == $province->id ? 'selected' : '' }}>{{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="ward_id">Xã/Phường</label>
                                <select class="form-control" id="ward_id" name="ward_id">
                                    <option value="">-- Chọn xã/phường --</option>
                                    @foreach($wards as $ward)
                                    <option value="{{ $ward->id }}" {{ $order->ward_id == $ward->id ? 'selected' : '' }}>{{ $ward->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="district_id">Huyện/Quận</label>
                                <select class="form-control" id="district_id" name="district_id">
                                    <option value="">-- Chọn huyện/quận --</option>
                                    @foreach($districts as $district)
                                    <option value="{{ $district->id }}" {{ $order->district_id == $district->id ? 'selected' : '' }}>{{ $district->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="payment_method_id">Phương thức thanh toán</label>
                                <select class="form-control" id="payment_method_id" name="payment_method_id">
                                    <option value="">-- Chọn phương thức thanh toán --</option>
                                    @foreach($paymentMethods as $paymentMethod)
                                    <option value="{{ $paymentMethod->id }}" {{ $order->payment_method_id == $paymentMethod->id ? 'selected' : '' }}>{{ $paymentMethod->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="shipping_unit_id">Tên đơn vị vận chuyển</label>
                                <select class="form-control" id="shipping_unit_id" name="shipping_unit_id">
                                    <option value="">-- Chọn đơn vị vận chuyển --</option>
                                    @foreach($shippingUnits as $shippingUnit)
                                    <option value="{{ $shippingUnit->id }}" {{ $order->shipping_unit_id == $shippingUnit->id ? 'selected' : '' }}>{{ $shippingUnit->name }}</option>
                                    @endforeach
                                </select>
                            </div>


