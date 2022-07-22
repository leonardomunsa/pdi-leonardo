<?php

class undercardFight implements ufcFight {
    private $rounds;

    public function setNumberOfRounds(int $rounds) {
        $this->rounds = $rounds;
    }
}