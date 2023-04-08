<?php

use Illuminate\Support\Facades\App;

if (!function_exists('config_path')) {
    function config_path($path = null)
    {
        if ($path) {
            return App::basePath('config/' . $path);
        }
        return App::basePath('config');
    }
}
