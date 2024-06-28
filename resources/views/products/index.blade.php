@extends('layout.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">SẢN PHẨM</h3>
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
                    <a href="#">Quản lý sản phẩm</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('products.index') }}">Danh sách saản phẩm</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">DANH SÁCH SẢN PHẨM</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Mô tả</th>
                                    <th>Ảnh</th>
                                    <th>SKU</th>
                                    <th>Dung lượng</th>
                                    <th>Số lượng</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày</th>
                                    <th>Thương hiệu</th>
                                    <th>Danh mục</th>
                                    <th>Màu sắc</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->image }}</td>
                                    <td>{{ $product->codeSKU }}</td>
                                    <td>{{ $product->capacity }}</td>
                                    <td>{{ $product->amount }}</td>
                                    <td>{{ $product->status }}</td>
                                    <td>{{ $product->date }}</td>
                                    <td>{{ $product->brand->name }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->color->name }}</td>
                                    <td>
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Chỉnh sửa</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
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
