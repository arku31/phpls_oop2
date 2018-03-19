<?php

require_once "FridgeInterface.php";
require_once "Exceptions.php";
/**
 * Нам нужно более детально описать что именно умеет холодильник.
 * Например если холодильник не настроить, но включить, он будет иметь темп +5
 * По умолчанию холодильник выключен
 * Class AbstractFridge
 */
abstract class AbstractFridge implements FridgeInterface
{
    const OFF = 0;
    const ON = 1;

    protected $name;
    protected $temperature = 5;
    protected $state = self::OFF;

    public function getName()
    {
        return $this->name;
    }

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function setTemperature($temp)
    {
        if ($this->isPoweredOn()) {
            $this->temperature = $temp;
        } else {
            throw new PoweredOffException('Fridge is powered off');
        }
    }

    public function isPoweredOn()
    {
        return $this->state === self::ON;
    }

    public function powerOff()
    {
        $this->state = self::OFF;
    }

    public function powerOn()
    {
        $this->state = self::ON;
    }

    public function showTemperature()
    {
        return $this->temperature;
    }
}