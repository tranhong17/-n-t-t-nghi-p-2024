<!-- Trong master layout hoặc header của bạn -->
@auth
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
@else
<a href="{{ route('login') }}">Login</a>
@endauth

<div class="logo-header" data-background-color="dark">
    <a href="index.html" class="logo">
        <img
            src="{{ asset('assets/img/kaiadmin/logo_light.svg') }}"
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
