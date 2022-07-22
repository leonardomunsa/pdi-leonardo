<?php

class championshipFight implements ufcFight, ufcChampionshipFight  {
    private $rounds;
    private $belt;

    public function setNumberOfRounds(int $rounds) {
        $this->rounds = $rounds;
    }

    public function setBelt(string $beltType) {
        $this->belt = $beltType;
    }
}