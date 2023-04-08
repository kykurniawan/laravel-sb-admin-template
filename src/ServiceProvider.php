<?php

namespace KyKurniawan\LaravelSBAdminTemplate;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use KyKurniawan\LaravelSBAdminTemplate\Services\TemplateService;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-sb-admin-template');

        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-sb-admin-template.php', 'laravel-sb-admin-template');

        $this->app->singleton(TemplateService::class, function () {
            return new TemplateService();
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/views' => $this->app->basePath('resources/views/vendor/kykurniawan/laravel-sb-admin-template'),
            ], 'sb-admin-views');

            $this->publishes([
                __DIR__ . '/../config/laravel-sb-admin-template.php' => $this->app->basePath('config/laravel-sb-admin-template.php'),
            ]);

            $this->publishes([
                __DIR__ . '/../resources/assets' => $this->app->basePath('public/vendor/kykurniawan/laravel-sb-admin-template')
            ], 'sb-admin-assets');
        }
    }
}
