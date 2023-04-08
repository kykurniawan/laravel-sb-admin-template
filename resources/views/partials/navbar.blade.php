@php
    $navbar = KyKurniawan\LaravelSBAdminTemplate\Facades\Template::getNavbar();
    $brandHref = $navbar->getBrandHref();
    if (!is_string($brandHref) && is_callable($brandHref)) {
        $brandHref = $brandHref(request());
    }
    $brandTitle = $navbar->getBrandTitle();
    if (!is_string($brandTitle) && is_callable($brandTitle)) {
        $brandTitle = $brandTitle(request());
    }
    $dropDownIcon = $navbar->getDropDownIcon();
    if (!is_string($dropDownIcon) && is_callable($dropDownIcon)) {
        $dropDownIcon = $dropDownIcon(request());
    }
@endphp
<nav id="{{ $navbar->getId() }}" class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand ps-3" href="{{ $brandHref }}">{{ $brandTitle }}</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    <ul class="navbar-nav ms-auto me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#!" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">{!! $dropDownIcon !!}</a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                @foreach ($navbar->getDropDownItems() as $item)
                    @php
                        $visible = $item->getVisible();
                        if (!is_string($visible) && is_callable($visible)) {
                            $visible = $visible(request());
                        }
                        $href = $item->getHref();
                        if (!is_string($href) && is_callable($href)) {
                            $href = $href(request());
                        }
                        $target = $item->getTarget();
                        if (!is_string($target) && is_callable($target)) {
                            $target = $target(request());
                        }
                        $text = $item->getText();
                        if (!is_string($text) && is_callable($text)) {
                            $text = $text(request());
                        }
                        $view = $item->getView();
                        if (!is_string($view) && is_callable($view)) {
                            $view = $view(request());
                        }
                    @endphp
                    @if ($visible)
                        @if ($item->getType() === 'link')
                            <li>
                                <a class="dropdown-item" target="{{ $target }}"
                                    href="{{ $href }}">{{ $text }}</a>
                            </li>
                        @elseif($item->getType() === 'divider')
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                        @elseif($item->getType() === 'view')
                            @include($view)
                        @endif
                    @endif
                @endforeach
            </ul>
        </li>
    </ul>
</nav>
