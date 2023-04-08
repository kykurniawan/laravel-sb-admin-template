@php
    $navbar = KyKurniawan\LaravelSBAdminTemplate\Facades\Template::getNavbar();
@endphp
<nav id="{{ $navbar->getId() }}" class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand ps-3" href="{{ $navbar->getBrandHref() }}">{{ $navbar->getBrandTitle() }}</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    <ul class="navbar-nav ms-auto me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#!" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">{!! $navbar->getDropDownIcon() !!}</a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                @foreach ($navbar->getDropDownItems() as $item)
                    @php
                        $visible = $item->getVisible();
                        if (is_callable($visible)) {
                            $visible = $visible($item);
                        }
                    @endphp
                    @if ($visible)
                        @if ($item->getType() === 'link')
                            <li>
                                <a class="dropdown-item" target="{{ $item->getTarget() }}"
                                    href="{{ $item->getHref() }}">{{ $item->getText() }}</a>
                            </li>
                        @elseif($item->getType() === 'divider')
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                        @elseif($item->getType() === 'view')
                            @include($item->getView())
                        @endif
                    @endif
                @endforeach
            </ul>
        </li>
    </ul>
</nav>
