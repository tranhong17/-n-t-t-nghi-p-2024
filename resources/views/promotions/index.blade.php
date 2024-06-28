@extends('layout.master')
@section('content')
<div class="container">
    <div class="page-inner">
    <div class="page-header">
        <h3 class="fw-bold mb-3">Mã khuyễn mãi</h3>
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
                <a href="#">Quản lý mã khuyến mãi</a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Danh sách mã khuyến mãi</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mx-auto">
                <div class="card-header">
                    <h4 class="card-title">Danh sách mã khuyến mãi</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="basic-datatables"
                                       class="display table table-striped table-hover" >
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên mã khuyến mãi</th>
                                        <th>Mã khuyến mãi</th>
                                        <th>Nội dung</th>
                                        <th>Ngày bắt đầu</th>
                                        <th>Ngày kết thúc</th>
                                        <th>Loại khuyến mãi</th>
                                        <th>Giá trị khuyến mãi</th>
                                        <th>Điều kiện</th>
                                        <th>Trạng thái</th>
                                        <th>URL</th>
                                        <th>Hành động</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($promotions as $promotion)
                                    <tr>
                                        <td>{{ $promotion->id }}</td>
                                        <td>{{ $promotion->name }}</td>
                                        <td>{{ $promotion->promo_code }}</td>
                                        <td>{{ $promotion->contents }}</td>
                                        <td>{{ $promotion->start_date }}</td>
                                        <td>{{ $promotion->end_date }}</td>
                                        <td>{{ $promotion->promotion_type }}</td>
                                        <td>{{ $promotion->promotion_value }}</td>
                                        <td>{{ $promotion->conditions }}</td>
                                        <td>{{ $promotion->status }}</td>
                                        <td>
                                            <a href="{{ $promotion->url }}" target="_blank">{{ $promotion->url }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('promotions.edit', $promotion->id) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('promotions.destroy', $promotion->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            @if ($promotion->deleted_at)
                                            <form action="{{ route('promotions.restore', $promotion->id) }}" method="POST" style="display: inline;">
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
    </div>
</div>
@endsection
