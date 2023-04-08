@php
    $footer = KyKurniawan\LaravelSBAdminTemplate\Facades\Template::getFooter();
    $visible = $footer->getVisible();
    if (is_callable($visible)) {
        $visible = $visible($footer);
    }
@endphp
@if ($visible)
    <footer id="{{ $footer->getId() }}" class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-end small">
                <div class="text-muted">{!! $footer->getCopyright() !!}</div>
            </div>
        </div>
    </footer>
@endif
