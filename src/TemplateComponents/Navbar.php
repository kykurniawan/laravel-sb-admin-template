<?php

namespace KyKurniawan\LaravelSBAdminTemplate\TemplateComponents;

class Navbar
{
    private $brandTitle;
    private $brandHref;
    private $dropDownIcon;
    private $dropDownItems;
    private $id;

    private function __construct()
    {
        $this->brandTitle = 'SB Admin';
        $this->brandHref = '/';
        $this->dropDownIcon = '<i class="fas fa-user fa-fw"></i>';
        $this->dropDownItems = [
            NavbarDropDownItem::make()->text('Drop Down Link 1'),
            NavbarDropDownItem::make()->type('divider'),
            NavbarDropDownItem::make()->text('Drop Down Link 2'),
        ];
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

    public function brandTitle(string $brandTitle)
    {
        $this->brandTitle = $brandTitle;

        return $this;
    }

    public function getBrandTitle()
    {
        return $this->brandTitle;
    }

    public function brandHref(string $brandHref)
    {
        $this->brandHref = $brandHref;

        return $this;
    }

    public function getBrandHref()
    {
        return $this->brandHref;
    }

    public function dropDownIcon(string $dropDownIcon)
    {
        $this->dropDownIcon = $dropDownIcon;

        return $this;
    }

    public function getDropDownIcon()
    {
        return $this->dropDownIcon;
    }

    public function dropDownItems(array $dropDownItems)
    {
        $this->dropDownItems = $dropDownItems;

        return $this;
    }

    public function getDropDownItems()
    {
        return $this->dropDownItems;
    }
}
