@extends('layout.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">ĐƠN HÀNG</h3>
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
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">DANH SÁCH ĐƠN HÀNG</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên khách hàng</th>
                                    <th>Số điện thoại</th>
                                    <th>Mã theo dõi</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày</th>
                                    <th>Mã giảm giá</th>
                                    <th>Tỉnh</th>
                                    <th>Xã/Phường</th>
                                    <th>Huyện/Quận</th>
                                    <th>Phương thức thanh toán</th>
                                    <th>Tên đơn vị vận chuyển</th>
                                    <th>Hành động</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->customer->name }}</td>
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->tracking_number }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->date }}</td>
                                    <td>{{ $order->promotion ? $order->promotion->code : '' }}</td>
                                    <td>{{ $order->province->name }}</td>
                                    <td>{{ $order->ward->name }}</td>
                                    <td>{{ $order->district->name }}</td>
                                    <td>{{ $order->paymentMethod->name }}</td>
                                    <td>{{ $order->shippingUnit->name }}</td>
                                    <td>
                                        <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Chỉnh sửa</a>
                                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
