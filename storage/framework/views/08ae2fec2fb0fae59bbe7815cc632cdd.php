<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">TỈNH THÀNH</h3>
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
                    <a href="#">Quản lý các tỉnh thành</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('provinces.index')); ?>">Danh sách các tỉnh thành</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Sửa tên các tỉnh thành</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-10 ms-auto me-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">SỬA TÊN các tỉnh thành</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="p-4">
                                <form method="post" action="<?php echo e(route('provinces.update', $province->id)); ?>">
                                    <?php echo method_field('put'); ?>
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id" value="<?php echo e($province->id); ?>">
                                    <div class="form-group">
                                        <label for="name">Tên tỉnh thành: </label>
                                        <input type="text" class="form-control" name="name" value="<?php echo e($province->name); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Loại: </label>
                                        <input type="text" class="form-control" name="type" value="<?php echo e($province->type); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug: </label>
                                        <input type="text" class="form-control" name="slug" value="<?php echo e($province->slug); ?>">
                                    </div>

                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary">Cập nhật tỉnh thành</button>
                                        <a href="<?php echo e(route('provinces.index')); ?>" class="btn btn-secondary">Hủy</a>
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

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DATN2024TTH\resources\views/provinces/edit.blade.php ENDPATH**/ ?>