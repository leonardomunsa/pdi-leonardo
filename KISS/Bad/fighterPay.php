<?php

function payFighter(String $card, Fighter $fighter) {
    if (str_contains($card, 'Fight Night')) {
        $PPV = false;
        return $fighter->salary;
    } else {
        if ($fighter->belt === true) {
            $PPV = true;
            return $fighter->salary * $PPV;
        } else {
            return $fighter->salary;
        }
    }
};
