<?php

class GloverTeixeira implements FightersPay {
    public float $salario;

    public function getPaid()
    {
        $this->salario = 600000;
    }
}
