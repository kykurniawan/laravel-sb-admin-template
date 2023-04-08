<?php

namespace KyKurniawan\LaravelSBAdminTemplate\TemplateComponents;

class Footer
{
    private $copyright;
    private $visible;
    private $id;

    private function __construct()
    {
        $this->copyright = 'Copyright © Your Website ' . date('Y');
        $this->visible = true;
        $this->id = uniqid();
    }

    public function getId()
    {
        $this->id;
    }

    public static function make()
    {
        return new self;
    }

    public function copyright($copyright)
    {
        $this->copyright = $copyright;

        return $this;
    }

    public function getCopyright()
    {
        return $this->copyright;
    }

    public function visible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    public function getVisible()
    {
        return $this->visible;
    }
}
