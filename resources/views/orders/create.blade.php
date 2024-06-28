@extends('layout.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">THÊM ĐƠN HÀNG MỚI</h3>
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
                    <span>Thêm đơn hàng mới</span>
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
                        <form method="POST" action="{{ route('orders.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Tên khách hàng</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Số điện thoại</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>

                            <div class="form-group">
                                <label for="tracking_number">Mã theo dõi</label>
                                <input type="text" class="form-control" id="tracking_number" name="tracking_number" required>
                            </div>

                            <div class="form-group">
                                <label for="status">Trạng thái</label>
                                <input type="text" class="form-control" id="status" name="status" required>
                            </div>

                            <div class="form-group">
                                <label for="date">Ngày</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>

                            <div class="form-group">
                                <label for="promotion_id">Mã giảm giá</label>
                                <select class="form-control" id="promotion_id" name="promotion_id">
                                    <option value="">-- Chọn mã giảm giá --</option>
                                    @foreach($promotions as $promotion)
                                    <option value="{{ $promotion->id }}">{{ $promotion->code }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="province_id">Tỉnh/Thành phố</label>
                                <select class="form-control" id="province_id" name="province_id">
                                    <option value="">-- Chọn tỉnh/thành phố --</option>
                                    @foreach($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="ward_id">Xã/Phường</label>
                                <select class="form-control" id="ward_id" name="ward_id">
                                    <option value="">-- Chọn xã/phường --</option>
                                    @foreach($wards as $ward)
                                    <option value="{{ $ward->id }}">{{ $ward->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="district_id">Huyện/Quận</label>
                                <select class="form-control" id="district_id" name="district_id">
                                    <option value="">-- Chọn huyện/quận --</option>
                                    @foreach($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="payment_method_id">Phương thức thanh toán</label>
                                <select class="form-control" id="payment_method_id" name="payment_method_id">
                                    <option value="">-- Chọn phương thức thanh toán --</option>
                                    @foreach($paymentMethods as $paymentMethod)
                                    <option value="{{ $paymentMethod->id }}">{{ $paymentMethod->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="shipping_unit_id">Tên đơn vị vận chuyển</label>
                                <select class="form-control" id="shipping_unit_id" name="shipping_unit_id">
                                    <option value="">-- Chọn đơn vị vận chuyển --</option>
                                    @foreach($shippingUnits as $shippingUnit)
                                    <option value="{{ $shippingUnit->id }}">{{ $shippingUnit->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Thêm đơn hàng</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
