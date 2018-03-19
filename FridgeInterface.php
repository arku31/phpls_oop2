<?php

/**
 * Описывает стандартный холодильник
 * Interface FridgeInterface
 */
interface FridgeInterface
{
    /**
     * Каждый холодильник позволяет выставить температуру
     * @param $temp
     * @return mixed
     */
    public function setTemperature($temp);
    /**
     * Каждый холодильник можно включить и выключить
     */
    public function powerOn();
    public function powerOff();
}