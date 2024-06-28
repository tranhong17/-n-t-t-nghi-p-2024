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
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">DANH SÁCH KHÁCH HÀNG</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables"
                                   class="display table table-striped table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo e($customers->id); ?>

                                    </td>
                                    <td>
                                        <?php echo e($customers->name); ?>

                                    </td>
                                    <td>
                                        <?php echo e($customers->phone); ?>

                                    </td>
                                    <td>
                                        <?php echo e($customers->email); ?>

                                    </td>
                                    <td>
                                        <?php echo e($customers->password); ?>

                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('customers.edit', $customers->id)); ?>" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>

                                        <form action="<?php echo e(route('customers.delete', $customers->id)); ?>" method="POST" style="display: inline;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <?php if($customers->deleted_at): ?>
                                        <form action="<?php echo e(route('customers.restore', $customers->id)); ?>" method="POST" style="display: inline;">
                                            <?php echo method_field('PUT'); ?>
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-success">Restore</button>
                                        </form>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DATN2024TTH\resources\views/customers/index.blade.php ENDPATH**/ ?>