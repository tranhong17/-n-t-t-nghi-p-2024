@extends('layout.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Giỏ hàng của bạn</h5>
    </div>
    <div class="card-body">
        @if(count($cartItems) > 0)
        <table class="table">
            <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Tổng cộng</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $item)
            <tr>
                <td>{{ $item->product->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ number_format($item->product->price, 0, ',', '.') }} VNĐ</td>
                <td>{{ number_format($item->product->price * $item->quantity, 0, ',', '.') }} VNĐ</td>
                <td>
                    <form action="{{ route('carts.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @else
        <p>Giỏ hàng của bạn hiện đang trống.</p>
        @endif
    </div>
</div>
@endsection
