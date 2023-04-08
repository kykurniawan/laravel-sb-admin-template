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
            if (!is_string($visible) && is_callable($visible)) {
                $visible = $visible($sidebarFooter);
            }
            $text = $sidebarFooter->getText();
            if (!is_string($text) && is_callable($text)) {
                $text = $text(request());
            }
        @endphp
        @if ($visible)
            <div class="sb-sidenav-footer">
                <div>{{ $text }}</div>
            </div>
        @endif
    </nav>
</div>
