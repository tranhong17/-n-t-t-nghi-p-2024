<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Thêm thương hiệu</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="<?php echo e(route('home')); ?>">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('brands.index')); ?>">Quản lý thương hiệu</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Thêm thêm thương hiệu</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">THÊM THƯƠNG HIỆU</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('brands.store')); ?>" >
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="name">Tên thương hiệu:</label>
                                <input type="text" class="form-control" name="name" >
                            </div>
                            <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary ">Thêm thương hiệu</button>
                            <a href="<?php echo e(route('brands.index')); ?>" class="btn btn-secondary ">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DATN2024TTH\resources\views/brands/create.blade.php ENDPATH**/ ?>