<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <title>@yield('title')</title>
    @section('head')
        @include('laravel-sb-admin-template::partials.style')
    @show
</head>

<body class="sb-nav-fixed">
    @include('laravel-sb-admin-template::partials.navbar')
    <div id="layoutSidenav">
        @include('laravel-sb-admin-template::partials.sidebar')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @yield('content')
                </div>
            </main>
            @include('laravel-sb-admin-template::partials.footer')
        </div>
    </div>
    @section('foot')
        @include('laravel-sb-admin-template::partials.script')
    @show
</body>

</html>
