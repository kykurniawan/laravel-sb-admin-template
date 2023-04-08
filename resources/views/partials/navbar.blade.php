<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand ps-3"
        href="{{ config('laravel-sb-admin-template.navbar.brand-href') }}">{{ config('laravel-sb-admin-template.navbar.brand-title', config('app.name')) }}</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    <ul class="navbar-nav ms-auto me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#!" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">{!! config('laravel-sb-admin-template.navbar.dropdown.icon') !!}</a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                @foreach (config('laravel-sb-admin-template.navbar.dropdown.items') as $item)
                    @php
                        $hidden = false;
                        if (isset($item['hidden'])) {
                            if ($item['hidden'] === true) {
                                $hidden = true;
                            }
                        }
                    @endphp
                    @if (!$hidden)
                        @if ($item['type'] === 'link')
                            <li><a class="dropdown-item"
                                    target="{{ isset($item['target']) ? $item['target'] : '_parent' }}"
                                    href="{{ $item['href'] }}">{{ $item['text'] }}</a></li>
                        @elseif($item['type'] === 'divider')
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                        @elseif($item['type'] === 'view')
                            @include($item['view'])
                        @endif
                    @endif
                @endforeach
            </ul>
        </li>
    </ul>
</nav>
