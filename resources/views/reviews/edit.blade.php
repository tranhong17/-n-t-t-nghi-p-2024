@extends('layout.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">ĐÁNH GIÁ</h3>
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
                    <a href="#">Quản lý các đánh giá</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('reviews.index') }}">Danh sách các đánh giá</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Sửa tên các đánh giá</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-10 ms-auto me-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">SỬA ĐÁNH GIÁ</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="p-4">
                                <form action="{{ route('reviews.update', $review->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="customer_id">Khách hàng:</label>
                                        <input type="text" class="form-control" id="customer_id" name="customer_id" value="{{ $review->customer_id }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="product_id">Sản phẩm:</label>
                                        <input type="text" class="form-control" id="product_id" name="product_id" value="{{ $review->product_id }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="rating">Điểm đánh giá:</label>
                                        <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" value="{{ $review->rating }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Nội dung đánh giá:</label>
                                        <textarea class="form-control" id="content" name="content" rows="4" required>{{ $review->content }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
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
