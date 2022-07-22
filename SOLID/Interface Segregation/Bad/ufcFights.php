<?php

class Fights {
    private $rounds;
    private $belt;

    public function makeChampRounds()
    {
        $this->rounds = 5;
    }

    public function beltType()
    {
        $this->belt = linear;
    }
}