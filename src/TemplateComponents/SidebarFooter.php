<?php

namespace KyKurniawan\LaravelSBAdminTemplate\TemplateComponents;

class SidebarFooter
{
    private $text;
    private $visible;
    private $id;

    private function __construct()
    {
        $this->text = 'sidebar footer';
        $this->visible = true;
        $this->id = uniqid();
    }

    public static function make()
    {
        return new self;
    }

    public function getId()
    {
        return $this->id;
    }

    public function text(string $text)
    {
        $this->text = $text;

        return $this;
    }

    public function getText()
    {
        return $this->text;
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
