@php
    $footer = KyKurniawan\LaravelSBAdminTemplate\Facades\Template::getFooter();
    $visible = $footer->getVisible();
    if (!is_string($visible) && is_callable($visible)) {
        $visible = $visible(request());
    }
    $copyright = $footer->getCopyright();
    if (!is_string($copyright) && is_callable($copyright)) {
        $copyright = $copyright(request());
    }
@endphp
@if ($visible)
    <footer id="{{ $footer->getId() }}" class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-end small">
                <div class="text-muted">{!! $copyright !!}</div>
            </div>
        </div>
    </footer>
@endif
