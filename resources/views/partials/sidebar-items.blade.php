@foreach ($items as $index => $item)
    @php
        $index .= uniqid();
        $hidden = false;
        if (isset($item['hidden'])) {
            if ($item['hidden'] === true) {
                $hidden = true;
            }
        }
    @endphp
    @if (!$hidden)
        @if ($item['type'] === 'heading')
            <div class="sb-sidenav-menu-heading">{{ $item['text'] }}</div>
        @elseif($item['type'] === 'link')
            @if (isset($item['children']) && is_array($item['children']) && sizeof($item['children']) > 0)
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                    data-bs-target="#collapseLayouts{{ $index }}" aria-expanded="false"
                    aria-controls="collapseLayouts{{ $index }}">
                    @if (isset($item['icon']))
                        <div class="sb-nav-link-icon">{!! $item['icon'] !!}</div>
                    @endif
                    {{ $item['text'] }}
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts{{ $index }}" aria-labelledby="headingOne">
                    <nav class="sb-sidenav-menu-nested nav" id="{{ $index }}Parent">
                        @include('laravel-sb-admin-template::partials.sidebar-items', [
                            'items' => $item['children'],
                        ])
                    </nav>
                </div>
            @else
                <a target="{{ isset($item['target']) ? $item['target'] : '_parent' }}"
                    class="nav-link {{ isset($item['active']) && $item['active'] === true ? 'active' : '' }}"
                    href="{{ $item['href'] }}">
                    @if (isset($item['icon']))
                        <div class="sb-nav-link-icon">{!! $item['icon'] !!}</div>
                    @endif
                    {{ $item['text'] }}
                </a>
            @endif
        @endif
    @endif
@endforeach
