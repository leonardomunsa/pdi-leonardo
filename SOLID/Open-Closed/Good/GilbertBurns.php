<?php

class GilbertBurns implements FightersPay {
    public float $salario;

    public function getPaid()
    {
        $this->salario = 200000;
    }
}
