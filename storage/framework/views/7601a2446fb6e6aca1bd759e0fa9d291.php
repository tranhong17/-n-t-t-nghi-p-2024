<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img
                    src="<?php echo e(asset('assets/img/kaiadmin/logo_light.svg')); ?>"
                    alt="navbar brand"
                    class="navbar-brand"
                    height="20"
                />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <ul class="nav nav-secondary">
                    <li class="nav-item active">
                        <a
                            data-bs-toggle="collapse"
                            href="#dashboard"
                            class="collapsed"
                            aria-expanded="false"
                        >
                            <i class="fas fa-home" ></i>
                            <p >Trang chủ</p>
                        </a>
                        <div class="collapse" >
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="../demo1/index.html">
                                        <span class="sub-item">Dashboard 1</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                          <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">NỘI DUNG</h4>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#base">
                            <i class="fas fa-layer-group"></i>
                            <p>Quản lý khách hàng</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?php echo e(route('customers.index')); ?>">
                                        <span class="sub-item">Danh sách khách hàng</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('customers.create')); ?>">
                                        <span class="sub-item">Thêm khách hàng</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarLayouts">
                            <i class="fas fa-th-list"></i>
                            <p>Quản lý sản phẩm</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="sidebarLayouts">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?php echo e(route('products.index')); ?>">
                                        <span class="sub-item">Danh sách sản phẩm</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('products.create')); ?>">
                                        <span class="sub-item">Thêm sản phẩm</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#forms">
                            <i class="fas fa-pen-square"></i>
                            <p>Quản lý danh mục</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="forms">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?php echo e(route('categories.index')); ?>">
                                        <span class="sub-item">Danh sách danh mục</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('categories.create')); ?>">
                                        <span class="sub-item">Thêm danh mục</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#tables">
                            <i class="fas fa-table"></i>
                            <p>Quản lý thương hiệu</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?php echo e(route('brands.index')); ?>">
                                        <span class="sub-item">Danh sách thương hiệu</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('brands.create')); ?>">
                                        <span class="sub-item">Thêm thương hiệu</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#maps">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Quản lý vận chuyển</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="maps">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?php echo e(route('shipping_unit.index')); ?>">
                                        <span class="sub-item">Danh sách đơn vị vận chuyển</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('shipping_unit.create')); ?>">
                                        <span class="sub-item">Thêm đơn vị vận chuyển</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#charts">
                            <i class="far fa-chart-bar"></i>
                            <p>Quản lý đơn hàng</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="charts">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?php echo e(route('orders.index')); ?>">
                                        <span class="sub-item">Danh sách đơn hàng</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('orders.create')); ?>">
                                        <span class="sub-item">Thêm đơn hàng</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#roles">
                            <i class="fas fa-desktop"></i>
                            <p>Quản lý phân quyền</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="roles">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?php echo e(route('roles.index')); ?>">
                                        <span class="sub-item">Danh sách phân quyền</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('roles.create')); ?>">
                                        <span class="sub-item">Thêm phân quyền</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#submenu">
                            <i class="fas fa-bars"></i>
                            <p>Quản lý thống kê</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="submenu">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a data-bs-toggle="collapse" href="#subnav1">
                                        <span class="sub-item">Sản phẩm</span>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="subnav1">
                                        <ul class="nav nav-collapse subnav">
                                            <li>
                                                <a href="#">
                                                    <span class="sub-item">Bán chạy</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="sub-item">Bán ít nhất</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a data-bs-toggle="collapse" href="#subnav2">
                                        <span class="sub-item">Doanh thu</span>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="subnav2">
                                        <ul class="nav nav-collapse subnav">
                                            <li>
                                                <a href="#">
                                                    <span class="sub-item">Tuần</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="collapse" id="subnav2">
                                        <ul class="nav nav-collapse subnav">
                                            <li>
                                                <a href="#">
                                                    <span class="sub-item">Tháng</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="collapse" id="subnav2">
                                        <ul class="nav nav-collapse subnav">
                                            <li>
                                                <a href="#">
                                                    <span class="sub-item">Năm</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Level 1</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#color">
                            <i class="fas fa-table"></i>
                            <p>Quản lý màu sắc</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="color">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?php echo e(route('colors.index')); ?>">
                                        <span class="sub-item">Danh sách màu sắc</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('colors.create')); ?>">
                                        <span class="sub-item">Thêm màu sắc</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#payment">
                            <i class="fas fa-table"></i>
                            <p>Quản lý thanh toán</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="payment">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?php echo e(route('payments.index')); ?>">
                                        <span class="sub-item">Danh sách thanh toán</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('payments.create')); ?>">
                                        <span class="sub-item">Thêm phương thức thanh toán</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#review">
                            <i class="fas fa-table"></i>
                            <p>Quản lý đánh giá</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="review">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?php echo e(route('reviews.index')); ?>">
                                        <span class="sub-item">Danh sách đánh giá</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#sale">
                            <i class="fas fa-table"></i>
                            <p>Quản lý mã khuyến mãi</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="sale">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?php echo e(route('promotions.index')); ?>">
                                        <span class="sub-item">Danh sách mã khuyến mãi</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('promotions.create')); ?>">
                                        <span class="sub-item">Thêm mã khuyến mãi</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\DATN2024TTH\resources\views/layout/slidebar.blade.php ENDPATH**/ ?>
