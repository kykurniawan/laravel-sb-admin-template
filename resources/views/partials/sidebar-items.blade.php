@foreach ($items as $item)
    @php
        $visible = $item->getVisible();
        if (!is_string($visible) && is_callable($visible)) {
            $visible = $visible(request());
        }
        $active = $item->getActive();
        if (!is_string($active) && is_callable($active)) {
            $active = $active(request());
        }
        $text = $item->getText();
        if (!is_string($text) && is_callable($text)) {
            $text = $text(request());
        }
        $icon = $item->getIcon();
        if (!is_string($icon) && is_callable($icon)) {
            $icon = $icon(request());
        }
        $target = $item->getTarget();
        if (!is_string($target) && is_callable($target)) {
            $target = $target(request());
        }
        $href = $item->getHref();
        if (!is_string($href) && is_callable($href)) {
            $href = $href(request());
        }
    @endphp
    @if ($visible)
        @if ($item->getType() === 'heading')
            <div class="sb-sidenav-menu-heading">{{ $text }}</div>
        @elseif($item->getType() === 'link')
            @if (sizeof($item->getChildren()) > 0)
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                    data-bs-target="#collapseLayouts{{ $item->getId() }}" aria-expanded="false"
                    aria-controls="collapseLayouts{{ $item->getId() }}">
                    @if ($icon)
                        <div class="sb-nav-link-icon">{!! $icon !!}</div>
                    @endif
                    {{ $text }}
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts{{ $item->getId() }}" aria-labelledby="headingOne">
                    <nav class="sb-sidenav-menu-nested nav" id="{{ $item->getId() }}Parent">
                        @include(config('laravel-sb-admin-template.sidebar-items-template'), [
                            'items' => $item->getChildren(),
                        ])
                    </nav>
                </div>
            @else
                <a target="{{ $target }}" class="nav-link {{ $active ? 'active' : '' }}"
                    href="{{ $href }}">
                    @if ($icon)
                        <div class="sb-nav-link-icon">{!! $icon !!}</div>
                    @endif
                    {{ $text }}
                </a>
            @endif
        @endif
    @endif
@endforeach
