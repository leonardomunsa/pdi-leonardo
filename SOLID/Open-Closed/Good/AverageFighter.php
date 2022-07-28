<?php

class AverageFighter implements FightersPay {
    public float $salario;

    public function getPaid()
    {
        $this->salario = 60000;
    }
}
