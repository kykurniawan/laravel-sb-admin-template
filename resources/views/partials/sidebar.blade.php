<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                @include('laravel-sb-admin-template::partials.sidebar-items', [
                    'items' => config('laravel-sb-admin-template.sidebar.items'),
                ])
            </div>
        </div>
        @if (config('laravel-sb-admin-template.sidebar.footer.visible'))
            <div class="sb-sidenav-footer">
                <div>{{ config('laravel-sb-admin-template.sidebar.footer.text') }}</div>
            </div>
        @endif
    </nav>
</div>
