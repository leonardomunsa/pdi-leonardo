<?php

function goToFight(array $masvidalBody) {
    if ($masvidalBody[$leg] === 'broken') {
        return "Masvidal can't fight";
    } elseif ($masvidalBody[$arm] === 'broken') {
        return "Masvidal can't fight";
    } elseif ($masvidalBody[$hand] === 'broken') {
        return "Masvidal can't fight";
    } elseif ($masvidalBody[$skull] === 'broken') {
        return "Masvidal can't fight";
    } 

    return "Good luck on your fight";    
}