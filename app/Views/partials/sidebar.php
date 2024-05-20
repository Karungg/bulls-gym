<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?= base_url() ?>">Bulls Gym</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url() ?>">Bulls</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item <?= uri_string() == 'admin' ? 'active' : '' ?>">
                <a href="<?= base_url('admin') ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Master Data</li>
            <li class="nav-item <?= uri_string() == 'admin/packages' ? 'active' : '' ?>">
                <a href="<?= base_url('admin/packages') ?>" class="nav-link"><i class="fas fa-fire"></i><span>Paket</span></a>
            </li>
        </ul>
    </aside>
</div>