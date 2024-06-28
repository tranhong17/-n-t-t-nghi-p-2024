<?php $__env->startSection('content'); ?>
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
                    <a href="<?php echo e(route('shipping_units.index')); ?>">Quản lý đơn vị vận chuyển</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Thêm đơn vị vận chuyển</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">THÊM ĐƠN VỊ VẬN CHUYỂN</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('shipping_units.store')); ?>" >
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="name">Tên đơn vị vận chuyển: </label>
                                <input type="text" class="form-control" name="name" >
                            </div>
                            <div class="form-group">
                                <label for="url">Đường dẫn (URL): </label>
                                <input type="text" class="form-control" name="url">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">ADD SHIPPING UNITS</button>
                                <a href="<?php echo e(route('shipping_units.index')); ?>" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DATN2024TTH\resources\views/shipping_units/create.blade.php ENDPATH**/ ?>