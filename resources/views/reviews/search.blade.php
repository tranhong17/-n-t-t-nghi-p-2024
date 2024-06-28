<form action="{{ route('reviews.index') }}" method="GET">
    <div class="form-row align-items-center">
        <div class="col-auto">
            <input type="text" name="search" class="form-control mb-2" id="search" placeholder="Tìm kiếm...">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-2">Tìm kiếm</button>
        </div>
    </div>
</form>
