<?php

function hireFighter($fights)
{
    foreach ($fights as $fight) {
        findDefeats($fight);
    }
}

function findDefeats($fight)
{
    if ($fight === 'defeat') {
        return 'Fighter not hired';
    }
    
    return 'Welcome to UFC';
}
