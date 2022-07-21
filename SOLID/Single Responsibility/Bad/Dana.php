<?php

class DanaWhite {
    private $salary;
    private $fight;
    private $card;

    protected function payFighters(Fighter $fighter)
    {
        return $fighter->getSalary($this->salary);   
    }

    public function matchFights(Fighter $redCorner, Fighter $blueCorner)
    {
        return array_push($this->fight, $redCorner, $blueCorner);
    }

    public function makeCard()
    {
        return array_push($this->card, $fight);
    }
}
