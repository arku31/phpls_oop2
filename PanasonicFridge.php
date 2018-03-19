<?php
require "AbstractFridge.php";
require "BeerSection.php";

class PanasonicFridge extends AbstractFridge
{
    use BeerSection;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->powerOn();
        if (method_exists(self::class, 'getBeer')) {
            $this->setTemperature(-1);
        } else {
            $this->setTemperature(5);
        }
    }
}

try {
    $fridge = new PanasonicFridge('ES-17');
    echo $fridge->showTemperature().PHP_EOL;
    $fridge->putBeer();
    $fridge->getBeer();
} catch (NoBeerException $e) {
    echo 'Exception: '.$e->getMessage().' HAHA. NO BEER FOR YOU'.PHP_EOL;
} catch (FullOfBeerException $e) {
    echo 'Exception: '.$e->getMessage().' PROBABLY TOO MUCH FOR U'.PHP_EOL;
} catch (PoweredOffException $e) {
    echo 'Exception: '.$e->getMessage().' LOL POWERON FIRST'.PHP_EOL;
}
