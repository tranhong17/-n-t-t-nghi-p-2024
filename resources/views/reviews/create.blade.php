<form action="{{ route('reviews.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="rating">Sao đánh giá:</label>
        <input type="number" name="rating" id="rating" min="1" max="5" class="form-control" required>
        <div id="readOnly" title="regular">
            <i class="fas fa-star text-success" title="regular" data-score="1"></i>&nbsp;
            <i class="fas fa-star text-success" title="regular" data-score="2"></i>&nbsp;
            <i class="fas fa-star text-success" title="regular" data-score="3"></i>&nbsp;
            <i class="far fa-star text-muted" title="regular" data-score="4"></i>&nbsp;
            <i class="far fa-star text-muted" title="regular" data-score="5">
            </i><input type="hidden" name="score" value="3" readonly="readonly"></div>
    </div>
    <div class="form-group">
        <label for="content">Nội dung đánh giá:</label>
        <textarea name="content" id="content" rows="3" class="form-control"></textarea>
    </div>
    <input type="hidden" name="customer_id" value="{{ Auth::id() }}">
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <button type="submit" class="btn btn-primary">Gửi đánh giá</button>
</form>
