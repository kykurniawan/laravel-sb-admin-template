<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                @include('laravel-sb-admin-template::partials.sidebar-items', [
                    'items' => config('laravel-sb-admin-template.sidebar.items'),
                ])
            </div>
        </div>
    </nav>
</div>
