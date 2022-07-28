<?php

class ConorMcGregor implements FightersPay {
    public float $salario;

    public function getPaid()
    {
        $this->salario = 10000000;
    }
}
