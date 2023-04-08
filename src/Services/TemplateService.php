<?php

namespace KyKurniawan\LaravelSBAdminTemplate\Services;

use KyKurniawan\LaravelSBAdminTemplate\TemplateComponents\Footer;
use KyKurniawan\LaravelSBAdminTemplate\TemplateComponents\Navbar;
use KyKurniawan\LaravelSBAdminTemplate\TemplateComponents\Sidebar;

class TemplateService
{
    protected $name;
    protected Navbar $navbar;
    protected Sidebar $sidebar;
    protected Footer $footer;

    public function __construct()
    {
        $this->navbar = Navbar::make();
        $this->sidebar = Sidebar::make();
        $this->footer = Footer::make();
    }

    public function navbar(Navbar $navbar)
    {
        $this->navbar = $navbar;

        return $this;
    }

    public function getNavbar(): Navbar
    {
        return $this->navbar;
    }

    public function sidebar(Sidebar $sidebar)
    {
        $this->sidebar = $sidebar;

        return $this;
    }

    public function getSidebar(): Sidebar
    {
        return $this->sidebar;
    }

    public function footer(Footer $footer)
    {
        $this->footer = $footer;

        return $this;
    }

    public function getFooter(): Footer
    {
        return $this->footer;
    }
}
