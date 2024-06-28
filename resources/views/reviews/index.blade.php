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
                    <a href="#">Quản lý đánh giá</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('reviews.index') }}">Danh sách các đánh giá</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">DANH SÁCH KHÁCH HÀNG ĐÁNH GIÁ</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Khách hàng</th>
                                    <th>Sản phẩm</th>
                                    <th>Điểm đánh giá</th>
                                    <th>Nội dung</th>
                                    <th>Ngày tạo</th>
                                    <th>Thao tác</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($reviews as $review)
                                <tr>
                                    <td>{{ $review->customer->name }}</td>
                                    <td>{{ $review->product->name }}</td>
                                    <td>{{ $review->rating }}</td>
                                    <td>{{ $review->content }}</td>
                                    <td>{{ $review->created_at->format('d/m/Y H:i') }}</td>
                                    <td>
                                        <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-sm btn-primary">Chỉnh sửa</a>
                                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa đánh giá này?')">Xóa</button>
                                        </form>
                                        @if ($reivews->deleted_at)
                                        <form action="{{ route('reviews.restore', $review->id) }}" method="POST" style="display: inline;">
                                            @method('PUT')
                                            @csrf
                                            <button type="submit" class="btn btn-success">Restore</button>
                                        </form>
                                        @endif
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
