<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">KHUYẾN MÃI</h3>
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
                    <a href="<?php echo e(route('promotions.index')); ?>">Danh sách mã khuyến mãi</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Sửa mã khuyến mãi</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-10 ms-auto me-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">SỬA MÃ KHUYẾN MÃI</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="p-4">
                                <form method="post" action="<?php echo e(route('promotions.update', $promotion->id)); ?>">
                                    <?php echo method_field('PUT'); ?>
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id" value="<?php echo e($promotion->id); ?>">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="name">Tên khuyến mãi:</label>
                                        <div class="col-md-10">
                                            <input type="text" name="name" class="form-control" value="<?php echo e($promotion->name); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="promo_code">Mã khuyến mãi:</label>
                                        <div class="col-md-10">
                                            <input type="text" name="promo_code" class="form-control" value="<?php echo e($promotion->promo_code); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="contents">Mô tả:</label>
                                        <div class="col-md-10">
                                            <textarea name="content" class="form-control" value="<?php echo e($promotion->contents); ?>"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="start_date">Ngày bắt đầu:</label>
                                        <div class="col-md-10">
                                            <input type="date" name="start_date" class="form-control" value="<?php echo e($promotion->start_date); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="end_date">Ngày kết thúc:</label>
                                        <div class="col-md-10">
                                            <input type="date" name="end_date" class="form-control" value="<?php echo e($promotion->end_date); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="promotion_type">Loại khuyến mãi:</label>
                                        <div class="col-md-10">
                                            <select name="promotion_type" class="form-control">
                                                <option value="discount" <?php echo e($promotion->promotion_type == 'discount' ? 'selected' : ''); ?>>Giảm giá</option>
                                                <option value="gift" <?php echo e($promotion->promotion_type == 'gift' ? 'selected' : ''); ?>>Quà tặng</option>
                                                <option value="free_shipping" <?php echo e($promotion->promotion_type == 'free_shipping' ? 'selected' : ''); ?>>Miễn phí vận chuyển</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="promotion_value">Giá trị khuyến mãi:</label>
                                        <div class="col-md-10">
                                            <input type="number" step="0.01" name="promotion_value" class="form-control" value="<?php echo e($promotion->promotion_value); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="conditions">Điều kiện:</label>
                                        <div class="col-md-10">
                                            <textarea name="conditions" class="form-control"><?php echo e($promotion->conditions); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="status">Trạng thái:</label>
                                        <div class="col-md-10">
                                            <select name="status" class="form-control" required>
                                                <option value="active" <?php echo e($promotion->status == 'active' ? 'selected' : ''); ?>>Hoạt động</option>
                                                <option value="inactive" <?php echo e($promotion->status == 'inactive' ? 'selected' : ''); ?>>Không hoạt động</option>
                                                <option value="expired" <?php echo e($promotion->status == 'expired' ? 'selected' : ''); ?>>Hết hạn</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="url">URL:</label>
                                        <div class="col-md-10">
                                            <input type="url" name="url" class="form-control" value="<?php echo e($promotion->url); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                                        <a href="<?php echo e(route('promotions.index')); ?>" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DATN2024TTH\resources\views/promotions/edit.blade.php ENDPATH**/ ?>