@extends('layout.master')
@section('content')
<form method="post" action="{{ route('products.store') }}">
    @csrf
    Name: <input type="text" name="prdName"><br>
    Image: <input type="text" name="prdImage"><br>
    CodeSKU: <input type="text" name="codeSKU"><br>
    Capacity: <input type="text" name="capacity"><br>
    Price: <input type="text" name="price"><br>
    Description: <input type="text" name="description" required><br> <!-- Thêm thuộc tính required -->
    Amount: <input type="number" name="amount"><br>
    Status:
    <select name="status">
        <option value="available">Còn hàng</option>
        <option value="unavailable">Hết hàng</option>
    </select><br>
    Brands:
    <select name="br_id">
        @foreach($brands as $brand)
        <option value="{{ $brand->id }}">
            {{ $brand->name }}
        </option>
        @endforeach
    </select><br>
    <button>ADD</button>
</form>
@endsection
