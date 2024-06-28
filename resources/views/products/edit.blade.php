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
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Giá</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Mô tả</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Link ảnh</label>
                                <input type="text" class="form-control" id="image" name="image" value="{{ $product->image }}">
                            </div>
                            <div class="mb-3">
                                <label for="codeSKU" class="form-label">Mã SKU</label>
                                <input type="text" class="form-control" id="codeSKU" name="codeSKU" value="{{ $product->codeSKU }}">
                            </div>
                            <div class="mb-3">
                                <label for="capacity" class="form-label">Dung lượng</label>
                                <input type="text" class="form-control" id="capacity" name="capacity" value="{{ $product->capacity }}">
                            </div>
                            <div class="mb-3">
                                <label for="amount" class="form-label">Số lượng</label>
                                <input type="text" class="form-control" id="amount" name="amount" value="{{ $product->amount }}">
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Trạng thái</label>
                                <select class="form-select" id="status" name="status">
                                    <option value="active" {{ $product->status == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ $product->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Ngày</label>
                                <input type="date" class="form-control" id="date" name="date" value="{{ $product->date }}">
                            </div>
                            <div class="mb-3">
                                <label for="brand_id" class="form-label">Thương hiệu</label>
                                <select class="form-select" id="brand_id" name="brand_id">
                                    @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="category_id" class="form-label">Danh mục</label>
                                <select class="form-select" id="category_id" name="category_id">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="color_id" class="form-label">Màu sắc</label>
                                <select class="form-select" id="color_id" name="color_id">
                                    @foreach ($colors as $color)
                                    <option value="{{ $color->id }}" {{ $product->color_id == $color->id ? 'selected' : '' }}>{{ $color->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
