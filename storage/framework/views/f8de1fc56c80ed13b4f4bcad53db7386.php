<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">MÀU SẮC</h3>
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
                    <a href="<?php echo e(route('colors.index')); ?>">Quản lý màu sắc</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Thêm màu sắc</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">THÊM MÀU SẮC</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('colors.store')); ?>" >
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="name">Tên màu sắc: </label>
                                <input type="text" class="form-control" name="name" >
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Thêm màu sắc</button>
                                <a href="<?php echo e(route('colors.index')); ?>" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DATN2024TTH\resources\views/colors/create.blade.php ENDPATH**/ ?>