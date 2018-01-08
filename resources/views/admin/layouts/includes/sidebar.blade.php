<div class="page-sidebar-wrapper">
    <!-- END SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200">
            <li class="nav-item{{ Route::is('admin.index') ? 'active open' : '' }}">
                <a href="{{ route('admin.index') }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>

            </li>
            <li class="nav-item {{ Route::is('admin.order') || Route::is('pengumuman.create') ||   Route::is('pengumuman.edit') ? 'active open' : '' }}">
                <a href="{{ route('admin.order') }}" class="nav-link nav-toggle">
                    <i class="icon-basket-loaded"></i>
                    <span class="title">Order</span>
                </a>
            </li>
            <li class="nav-item {{ Route::is('admin.user') ? 'active open' : '' }}">
                <a href="{{ route('admin.user') }}" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">User</span>
                </a>
            </li>
            <li class="nav-item {{ Route::is('admin.store') ? 'active open' : '' }}">
                <a href="{{ route('admin.store') }}" class="nav-link nav-toggle">
                    <i class="icon-handbag"></i>
                    <span class="title">Store</span>
                </a>
            </li>
            <li class="nav-item {{ Route::is('admin.product') ? 'active open' : '' }}">
                <a href="{{ route('admin.product') }}" class="nav-link nav-toggle">
                    <i class="icon-tag"></i>
                    <span class="title">Product</span>
                </a>
            </li>
            <li class="nav-item {{ Route::is('laporan') ? 'active open' : '' }}">
                <a href="" class="nav-link nav-toggle">
                    <i class="icon-doc"></i>
                    <span class="title">Laporan</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>