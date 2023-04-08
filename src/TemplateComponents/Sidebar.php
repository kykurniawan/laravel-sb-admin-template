<?php

namespace KyKurniawan\LaravelSBAdminTemplate\TemplateComponents;

class Sidebar
{
    private $sidebarItems;
    private SidebarFooter $sidebarFooter;
    private $id;

    private function __construct()
    {
        $this->sidebarItems = [
            SidebarItem::make()
        ];
        $this->sidebarFooter = SidebarFooter::make();
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

    public function sidebarItems(array $sidebarItems)
    {
        $this->sidebarItems = $sidebarItems;

        return $this;
    }

    public function getSidebarItems()
    {
        return $this->sidebarItems;
    }

    public function sidebarFooter(SidebarFooter $sidebarFooter)
    {
        $this->sidebarFooter = $sidebarFooter;

        return $this;
    }

    public function getSidebarFooter(): SidebarFooter
    {
        return $this->sidebarFooter;
    }
}
