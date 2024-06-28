@extends('layout.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Khách hàng</h3>
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
                    <a href="#">Quản lý khách hàng</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('customers.index') }}">Danh sách khách hàng</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">DANH SÁCH KHÁCH HÀNG</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables"
                                   class="display table table-striped table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                                    @foreach($customers as $customers)
                                <tr>
                                    <td>
                                        {{ $customers->id }}
                                    </td>
                                    <td>
                                        {{ $customers->name }}
                                    </td>
                                    <td>
                                        {{ $customers->phone }}
                                    </td>
                                    <td>
                                        {{ $customers->email }}
                                    </td>
                                    <td>
                                        {{ $customers->password }}
                                    </td>
                                    <td>
                                        <a href="{{ route('customers.edit', $customers->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>

                                        <form action="{{ route('customers.delete', $customers->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        @if ($customers->deleted_at)
                                        <form action="{{ route('customers.restore', $customers->id) }}" method="POST" style="display: inline;">
                                            @method('PUT')
                                            @csrf
                                            <button type="submit" class="btn btn-success">Restore</button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
