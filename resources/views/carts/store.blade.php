@extends('layout.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Thêm sản phẩm vào giỏ hàng</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('carts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="product_id">Chọn sản phẩm:</label>
                <select class="form-control" id="product_id" name="product_id" required>
                    <option value="">Chọn sản phẩm</option>
                    @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Số lượng:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="1" value="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
        </form>
    </div>
</div>
@endsection
