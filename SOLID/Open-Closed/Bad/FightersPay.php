<?php

class FighterPays {
    public float $money;

    public function payFighter(string $fighter)
    {
        if ($fighter === 'Conor McGregor') {
            $this->money = 10000000;
        } elseif ($fighter === 'Charles Oliveira') {
            $this->money = 1000000;
        } elseif ($fighter === 'Glover Teixeira') {
            $this->money = 600000;
        } elseif ($fighter === 'Gilbert Burns') {
            $this->money = 200000;
        } else {
            $this->money = 60000;
        }
    }
}