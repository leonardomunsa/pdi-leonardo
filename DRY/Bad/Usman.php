<?php

function goToFight(array $usmanBody) {
    if ($usmanBody[$leg] === 'broken') {
        return "Usman can't fight";
    } elseif ($usmanBody[$arm] === 'broken') {
        return "Usman can't fight";
    } elseif ($usmanBody[$hand] === 'broken') {
        return "Usman can't fight";
    } elseif ($usmanBody[$skull] === 'broken') {
        return "Usman can't fight";
    } 

    return "Good luck on your fight";    
}