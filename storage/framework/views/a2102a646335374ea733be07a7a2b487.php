<!-- Trong master layout hoặc header của bạn -->
<?php if(auth()->guard()->check()): ?>
<form method="POST" action="<?php echo e(route('logout')); ?>">
    <?php echo csrf_field(); ?>
    <button type="submit">Logout</button>
</form>
<?php else: ?>
<a href="<?php echo e(route('login')); ?>">Login</a>
<?php endif; ?>

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
<?php /**PATH C:\xampp\htdocs\DATN2024TTH\resources\views/layout/header.blade.php ENDPATH**/ ?>