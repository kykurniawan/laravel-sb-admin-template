<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                @include('sb-admin::components.partials.sidebar-items', [
                    'items' => config('sb-admin.sidebar-items'),
                ])
            </div>
        </div>
    </nav>
</div>
