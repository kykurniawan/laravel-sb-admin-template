<?php

namespace KyKurniawan\LaravelSBAdminTemplate;

use Illuminate\Support\ServiceProvider;

class LaravelSBAdminTemplateServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'sb-admin');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'sb-admin');
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => $this->app->basePath('config/sb-admin.php'),
            ], 'config');
            $this->publishes([
                __DIR__ . '/../resources/views/components' => $this->app->basePath('resources/views/components'),
            ], 'view-components');
            $this->publishes([
                __DIR__ . '/../resources/assets' => $this->app->basePath('public/sb-admin')
            ], 'assets');
        }
    }
}
