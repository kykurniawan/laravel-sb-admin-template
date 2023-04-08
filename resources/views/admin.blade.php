<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <title>@yield(config('laravel-sb-admin-template.title-section-name'))</title>
    @section(config('laravel-sb-admin-template.head-section-name'))
        @include(config('laravel-sb-admin-template.style-template'))
    @show
</head>

<body class="sb-nav-fixed">
    @include(config('laravel-sb-admin-template.navbar-template'))
    <div id="layoutSidenav">
        @include(config('laravel-sb-admin-template.sidebar-template'))
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @yield(config('laravel-sb-admin-template.content-section-name'))
                </div>
            </main>
            @include(config('laravel-sb-admin-template.footer-template'))
        </div>
    </div>
    @section(config('laravel-sb-admin-template.foot-section-name'))
        @include(config('laravel-sb-admin-template.script-template'))
    @show
</body>

</html>
