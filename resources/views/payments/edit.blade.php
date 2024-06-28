@extends('layout.master')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">CHỈNH SỬA SẢN PHẨM</h3>
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
                    <a href="{{ route('products.index') }}">Danh sách sản phẩm</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <span>Chỉnh sửa sản phẩm</span>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">CHỈNH SỬA SẢN PHẨM</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Tên sản phẩm:</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
                            </div>
                            <div class="form-group">
                                <label for="price">Giá:</label>
                                <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}">
                            </div>
                            <div class="form-group">
                                <label for="status">Trạng thái:</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="active" {{ $product->status === 'active' ? 'selected' : '' }}>Hoạt động</option>
                                    <option value="inactive" {{ $product->status === 'inactive' ? 'selected' : '' }}>Ngừng hoạt động</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="color_id">Màu sắc:</label>
                                <select name="color_id" id="color_id" class="form-control">
                                    @foreach ($colors as $color)
                                    <option value="{{ $color->id }}" {{ $product->color_id === $color->id ? 'selected' : '' }}>
                                        {{ $color->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="brand_id">Thương hiệu:</label>
                                <select name="brand_id" id="brand_id" class="form-control">
                                    @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" {{ $product->brand_id === $brand->id ? 'selected' : '' }}>
                                        {{ $brand->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Danh mục:</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $product->category_id === $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Lưu lại</button>
                            <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
