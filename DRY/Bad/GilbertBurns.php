<?php

function goToFight(array $gilbertBody) {
    if ($gilbertBody[$leg] === 'broken') {
        return "Gilbert can't fight";
    } elseif ($gilbertBody[$arm] === 'broken') {
        return "Gilbert can't fight";
    } elseif ($gilbertBody[$hand] === 'broken') {
        return "Gilbert can't fight";
    } elseif ($gilbertBody[$skull] === 'broken') {
        return "Gilbert can't fight";
    } 

    return "Good luck on your fight";    
}