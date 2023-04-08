<?php

namespace KyKurniawan\LaravelSBAdminTemplate\TemplateComponents;

use Exception;

class NavbarDropDownItem
{
    private $type;
    private $text;
    private $href;
    private $target;
    private $visible;
    private $view;
    private $id;

    private function __construct()
    {
        $this->type = 'link';
        $this->text = 'Drop Down Link';
        $this->href = '/';
        $this->target = '_parent';
        $this->visible = true;
        $this->view = 'laravel-sb-admin-template::partials.navbar-dropdown-item-form';
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

    public function visible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    public function getVisible()
    {
        return $this->visible;
    }

    public function view($view)
    {
        $this->view = $view;

        return $this;
    }

    public function getView()
    {
        if ($this->getType() === 'view' && $this->view === null) {
            throw new Exception('View name is required when drop down type is view');
        }

        return $this->view;
    }
}
