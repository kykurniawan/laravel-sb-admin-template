<?php

namespace KyKurniawan\LaravelSBAdminTemplate\Facades;

use Illuminate\Support\Facades\Facade;
use KyKurniawan\LaravelSBAdminTemplate\Services\TemplateService;

class Template extends Facade
{
    protected static function getFacadeAccessor()
    {
        return TemplateService::class;
    }
}
