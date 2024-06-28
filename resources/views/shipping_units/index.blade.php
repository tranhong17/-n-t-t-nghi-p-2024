@extends('layout.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">VẬN CHUYỂN</h3>
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
                    <a href="#">Quản lý đơn vị vận chuyển</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('shipping_units.index') }}">Danh sách đơn vị vận chuyển</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">DANH SÁCH ĐƠN VỊ VẬN CHUYỂN</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>URl</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($shipping_units as $shipping_unit)
                                <tr>
                                    <td>{{ $shipping_unit->id }}</td>
                                    <td>{{ $shipping_unit->name }}</td>
                                    <td><a href="{{ $shipping_unit->url }}" target="_blank">{{ $shipping_unit->url }}</td>
                                    <td>
                                        <a href="{{ route('shipping_units.edit', $shipping_unit->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('shipping_units.destroy', $shipping_unit->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        @if ($shipping_unit->deleted_at)
                                        <form action="{{ route('shipping_units.restore', $shipping_unit->id) }}" method="POST" style="display: inline;">
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
