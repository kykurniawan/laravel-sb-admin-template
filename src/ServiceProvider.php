<?php

namespace KyKurniawan\LaravelSBAdminTemplate;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'laravel-sb-admin-template');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-sb-admin-template');
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => $this->app->basePath('config/laravel-sb-admin-template.php'),
            ], 'sb-admin-config');
            $this->publishes([
                __DIR__ . '/../resources/views' => $this->app->basePath('resources/views/vendor/kykurniawan/laravel-sb-admin-template'),
            ], 'sb-admin-views');
            $this->publishes([
                __DIR__ . '/../resources/assets' => $this->app->basePath('public/vendor/kykurniawan/laravel-sb-admin-template')
            ], 'sb-admin-assets');
        }
    }
}
