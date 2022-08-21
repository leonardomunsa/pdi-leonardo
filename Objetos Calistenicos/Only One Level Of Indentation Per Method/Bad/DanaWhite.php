<?php

function hireFighter($fights)
{
    foreach ($fights as $fight) {
        if ($fight === 'defeat') {
            return 'Fighter not hired';
        }
    }

    return 'Welcome to UFC';
}