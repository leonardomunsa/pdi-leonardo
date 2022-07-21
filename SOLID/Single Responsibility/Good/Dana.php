<?php

class DanaWhite {
    private $salary;

    protected function payFighters(Fighter $fighter)
    {
        return $fighter->getSalary($this->salary);   
    }
}
