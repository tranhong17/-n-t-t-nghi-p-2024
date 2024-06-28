<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
    <div class="page-header">
        <h3 class="fw-bold mb-3">Mã khuyễn mãi</h3>
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
                <a href="#">Danh sách mã khuyến mãi</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mx-auto">
                <div class="card-header">
                    <h4 class="card-title">Danh sách mã khuyến mãi</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="basic-datatables"
                                       class="display table table-striped table-hover" >
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên mã khuyến mãi</th>
                                        <th>Mã khuyến mãi</th>
                                        <th>Nội dung</th>
                                        <th>Ngày bắt đầu</th>
                                        <th>Ngày kết thúc</th>
                                        <th>Loại khuyến mãi</th>
                                        <th>Giá trị khuyến mãi</th>
                                        <th>Điều kiện</th>
                                        <th>Trạng thái</th>
                                        <th>URL</th>
                                        <th>Hành động</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $promotions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promotion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($promotion->id); ?></td>
                                        <td><?php echo e($promotion->name); ?></td>
                                        <td><?php echo e($promotion->promo_code); ?></td>
                                        <td><?php echo e($promotion->contents); ?></td>
                                        <td><?php echo e($promotion->start_date); ?></td>
                                        <td><?php echo e($promotion->end_date); ?></td>
                                        <td><?php echo e($promotion->promotion_type); ?></td>
                                        <td><?php echo e($promotion->promotion_value); ?></td>
                                        <td><?php echo e($promotion->conditions); ?></td>
                                        <td><?php echo e($promotion->status); ?></td>
                                        <td>
                                            <a href="<?php echo e($promotion->url); ?>" target="_blank"><?php echo e($promotion->url); ?></a>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('promotions.edit', $promotion->id)); ?>" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="<?php echo e(route('promotions.destroy', $promotion->id)); ?>" method="POST" style="display: inline;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            <?php if($promotion->deleted_at): ?>
                                            <form action="<?php echo e(route('promotions.restore', $promotion->id)); ?>" method="POST" style="display: inline;">
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
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DATN2024TTH\resources\views/promotions/index.blade.php ENDPATH**/ ?>