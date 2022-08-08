<?php

function medicalCheck(array $fighterBody) {
    foreach ($fighterBody as $bodyPart) {
        if ($bodyPart === 'broken') {
            return false;
        }
    }

    return true;    
}