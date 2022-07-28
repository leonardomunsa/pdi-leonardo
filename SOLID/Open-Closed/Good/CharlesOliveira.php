<?php

class CharlesOliveira implements FightersPay {
    public float $salario;

    public function getPaid()
    {
        $this->salario = 1000000;
    }
}
