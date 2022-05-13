<?php

class Menu
{
    private $menu;

    public function __construct($menu)
    {
        $this->menu = $menu;
    }

    public function getMenu()
    {
        return $this->menu;
    }

    public function setMenu($menu)
    {
        if (isset($menu) && !empty($menu)) {
            $this->menu = $menu;
        }
    }
}