<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">ĐƠN HÀNG</h3>
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
                    <a href="#">Quản lý đơn hàng</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('orders.index')); ?>">Danh sách đơn hàng</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">DANH SÁCH ĐƠN HÀNG</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên khách hàng</th>
                                    <th>Số điện thoại</th>
                                    <th>Mã theo dõi</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày</th>
                                    <th>Mã giảm giá</th>
                                    <th>Tỉnh</th>
                                    <th>Xã/Phường</th>
                                    <th>Huyện/Quận</th>
                                    <th>Phương thức thanh toán</th>
                                    <th>Tên đơn vị vận chuyển</th>
                                    <th>Hành động</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($order->id); ?></td>
                                    <td><?php echo e($order->customer->name); ?></td>
                                    <td><?php echo e($order->phone); ?></td>
                                    <td><?php echo e($order->tracking_number); ?></td>
                                    <td><?php echo e($order->status); ?></td>
                                    <td><?php echo e($order->date); ?></td>
                                    <td><?php echo e($order->promotion ? $order->promotion->code : ''); ?></td>
                                    <td><?php echo e($order->province->name); ?></td>
                                    <td><?php echo e($order->ward->name); ?></td>
                                    <td><?php echo e($order->district->name); ?></td>
                                    <td><?php echo e($order->paymentMethod->name); ?></td>
                                    <td><?php echo e($order->shippingUnit->name); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('orders.edit', $order->id)); ?>" class="btn btn-warning">Chỉnh sửa</a>
                                        <form action="<?php echo e(route('orders.destroy', $order->id)); ?>" method="POST" style="display:inline;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                        </form>
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

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DATN2024TTH\resources\views/orders/index.blade.php ENDPATH**/ ?>