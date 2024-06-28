<form action="{{ route('brands.destroy', ['id' => $brand->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
