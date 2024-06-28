<?php $__env->startSection('content'); ?>
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
                <a href="<?php echo e(route('customers.index')); ?>">Danh sách khách hàng</a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Sửa thông tin khách hàng</a>
            </li>
        </ul>
    </div>
        <div class="row">
            <div class="col-md-10 ms-auto me-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sửa thông tin khách hàng</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="p-4">
                                <form method="post" action="<?php echo e(route('customers.update', $customer->id)); ?>">
                                    <?php echo method_field('PUT'); ?>
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id" value="<?php echo e($customer->id); ?>">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="name">Tên khách hàng:</label>
                                        <div class="col-md-10">
                                            <input type="text" name="name" class="form-control" value="<?php echo e($customer->name); ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="phone">Số điện thoại:</label>
                                        <div class="col-md-10">
                                            <input type="text" name="phone" class="form-control" value="<?php echo e($customer->phone); ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="email">Email:</label>
                                        <div class="col-md-10">
                                            <input type="email" name="email" class="form-control" value="<?php echo e($customer->email); ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="password">Mật khẩu:</label>
                                        <div class="col-md-10">
                                            <input type="password" name="password" class="form-control" value="<?php echo e($customer->password); ?>">
                                        </div>
                                    </div>

                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                                <a href="<?php echo e(route('customers.index')); ?>" class="btn btn-secondary">Cancel</a>
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

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DATN2024TTH\resources\views/customers/edit.blade.php ENDPATH**/ ?>