<?php

class DanaWhite {
    private string $PPVpoints;

    public function payFighters(Fighter $fighter) {
        if ($fighter->belt === true) {
            return $fighter->salary * $this->PPVpoints;
        }

        return $fighter->salary;
    }
}