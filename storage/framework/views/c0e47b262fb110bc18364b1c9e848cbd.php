<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">SẢN PHẨM</h3>
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
                    <a href="#">Quản lý sản phẩm</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('products.index')); ?>">Danh sách saản phẩm</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">DANH SÁCH SẢN PHẨM</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Mô tả</th>
                                    <th>Ảnh</th>
                                    <th>SKU</th>
                                    <th>Dung lượng</th>
                                    <th>Số lượng</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày</th>
                                    <th>Thương hiệu</th>
                                    <th>Danh mục</th>
                                    <th>Màu sắc</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($product->id); ?></td>
                                    <td><?php echo e($product->name); ?></td>
                                    <td><?php echo e($product->price); ?></td>
                                    <td><?php echo e($product->description); ?></td>
                                    <td><?php echo e($product->image); ?></td>
                                    <td><?php echo e($product->codeSKU); ?></td>
                                    <td><?php echo e($product->capacity); ?></td>
                                    <td><?php echo e($product->amount); ?></td>
                                    <td><?php echo e($product->status); ?></td>
                                    <td><?php echo e($product->date); ?></td>
                                    <td><?php echo e($product->brand->name); ?></td>
                                    <td><?php echo e($product->category->name); ?></td>
                                    <td><?php echo e($product->color->name); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-warning">Chỉnh sửa</a>
                                    </td>
                                    <td>
                                        <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" style="display:inline;">
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

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DATN2024TTH\resources\views/products/index.blade.php ENDPATH**/ ?>