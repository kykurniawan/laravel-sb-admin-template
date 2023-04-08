<?php

namespace KyKurniawan\LaravelSBAdminTemplate\TemplateComponents;

class SidebarItem
{
    private $type;
    private $text;
    private $visible;
    private $icon;
    private $href;
    private $target;
    private $children;
    private $active;
    private $id;

    private function __construct()
    {
        $this->type = 'link';
        $this->text = 'Text 1';
        $this->visible = true;
        $this->icon = '<i class="fas fa-minus fa-fw"></i>';
        $this->href = '/';
        $this->target = '_parent';
        $this->children = [];
        $this->active = false;
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

    public function type($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function text($text)
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

    public function icon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function href($href)
    {
        $this->href = $href;

        return $this;
    }

    public function getHref()
    {
        return $this->href;
    }

    public function target($target)
    {
        $this->target = $target;

        return $this;
    }

    public function getTarget()
    {
        return $this->target;
    }

    public function children($children)
    {
        $this->children = $children;

        return $this;
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function active($active)
    {
        $this->active = $active;

        return $this;
    }

    public function getActive()
    {
        return $this->active;
    }
}
