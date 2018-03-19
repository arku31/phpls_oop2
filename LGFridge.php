<?php
require "AbstractFridge.php";
require "BeerSection.php";

class LGFridge extends AbstractFridge
{
    use BeerSection;

    protected $secondFridge;

    public function insertFridge($fridge)
    {
        $this->secondFridge = $fridge;
    }
}
