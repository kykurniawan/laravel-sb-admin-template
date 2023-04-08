@php
    $sidebar = KyKurniawan\LaravelSBAdminTemplate\Facades\Template::getSidebar();
@endphp
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                @include(config('laravel-sb-admin-template.sidebar-items-template'), [
                    'items' => $sidebar->getSidebarItems(),
                ])
            </div>
        </div>
        @php
            $sidebarFooter = $sidebar->getSidebarFooter();
            $visible = $sidebarFooter->getVisible();
            if (is_callable($visible)) {
                $visible = $visible($sidebarFooter);
            }
        @endphp
        @if ($visible)
            <div class="sb-sidenav-footer">
                <div>{{ $sidebarFooter->getText() }}</div>
            </div>
        @endif
    </nav>
</div>
