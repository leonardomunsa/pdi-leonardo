<?php

function payFighter(String $card, Fighter $fighter) {
    if (str_contains($card, 'Fight Night')) {
        $PPV = false;
        return $fighter->salary;
    } else {
        if ($fighter->belt === true) {
            $PPV = true;
        } else {
            return $fighter->salary;
        }
    }
};
