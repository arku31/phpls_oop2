<?php
require_once "LGFridge.php";
require_once "PanasonicFridge.php";
try {
    $fridge = new LGFridge('ES-17');
    $fridge->putBeer();
    $fridge->getBeer();
    $fridge->getBeer();
    $panasonic = new PanasonicFridge('SUPER');
    $fridge->insertFridge($panasonic);
    echo $fridge->showTemperature();
} catch (NoBeerException $e) {
    $fridge->putBeer();
    $fridge->putBeer();
    $fridge->putBeer();
    $fridge->putBeer();
    $fridge->putBeer();
    $fridge->putBeer();
    $fridge->getBeer();
//    echo 'Exception: '.$e->getTraceAsString().' HAHA. NO BEER FOR YOU'.PHP_EOL;
} catch (FullOfBeerException $e) {
//    echo 'Exception: '.$e->getMessage().' PROBABLY TOO MUCH FOR U'.PHP_EOL;
} catch (PoweredOffException $e) {
//    echo 'Exception: '.$e->getMessage().' LOL POWERON FIRST'.PHP_EOL;
}

