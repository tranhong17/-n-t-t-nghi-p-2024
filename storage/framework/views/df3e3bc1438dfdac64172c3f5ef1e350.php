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
                    <a href="#">Quản lý đơn vị vận chuyển</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('shipping_units.index')); ?>">Danh sách đơn vị vận chuyển</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">DANH SÁCH ĐƠN VỊ VẬN CHUYỂN</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>URl</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $shipping_units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shipping_unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($shipping_unit->id); ?></td>
                                    <td><?php echo e($shipping_unit->name); ?></td>
                                    <td><a href="<?php echo e($shipping_unit->url); ?>" target="_blank"><?php echo e($shipping_unit->url); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('shipping_units.edit', $shipping_unit->id)); ?>" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="<?php echo e(route('shipping_units.destroy', $shipping_unit->id)); ?>" method="POST" style="display: inline;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <?php if($shipping_unit->deleted_at): ?>
                                        <form action="<?php echo e(route('shipping_units.restore', $shipping_unit->id)); ?>" method="POST" style="display: inline;">
                                            <?php echo method_field('PUT'); ?>
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-success">Restore</button>
                                        </form>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DATN2024TTH\resources\views/shipping_units/index.blade.php ENDPATH**/ ?>