@foreach ($items as $item)
    @php
        $visible = $item->getVisible();
        if (is_callable($visible)) {
            $visible = $visible($item);
        }
        $active = $item->getActive();
        if (is_callable($active)) {
            $active = $active($item);
        }
    @endphp
    @if ($visible)
        @if ($item->getType() === 'heading')
            <div class="sb-sidenav-menu-heading">{{ $item->getText() }}</div>
        @elseif($item->getType() === 'link')
            @if (sizeof($item->getChildren()) > 0)
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                    data-bs-target="#collapseLayouts{{ $item->getId() }}" aria-expanded="false"
                    aria-controls="collapseLayouts{{ $item->getId() }}">
                    @if ($icon = $item->getIcon())
                        <div class="sb-nav-link-icon">{!! $icon !!}</div>
                    @endif
                    {{ $item->getText() }}
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
                <a target="{{ $item->getTarget() }}" class="nav-link {{ $active }}" href="{{ $item->getHref() }}">
                    @if ($icon = $item->getIcon())
                        <div class="sb-nav-link-icon">{!! $icon !!}</div>
                    @endif
                    {{ $item->getText() }}
                </a>
            @endif
        @endif
    @endif
@endforeach
