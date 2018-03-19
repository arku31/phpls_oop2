<?php
trait BeerSection
{
    protected $beercnt = 0;
    protected $maxlimit = 10;

    public function putBeer()
    {
        if ($this->beercnt != $this->maxlimit) {
            $this->beercnt++;
            echo 'More Beer in fridge: '.$this->beercnt.PHP_EOL;
        } else {
            throw new FullOfBeerException('Fridge full. Drink some beer first!');
        }
    }

    public function getBeer()
    {
        if ($this->beercnt > 0) {
            $this->beercnt--;
        } else {
            echo 'Less Beer in fridge: '.$this->beercnt.PHP_EOL;
            throw new NoBeerException('There is no beer! Bring some beer first!');
        }
    }
}