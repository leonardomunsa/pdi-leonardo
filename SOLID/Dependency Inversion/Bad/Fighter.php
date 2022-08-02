<?php

class Fighter
{
    public $style;

    public function __construct()
    {
        $this->style = new MuayThai();
    }

    public function golpear()
    {
        $this->style->cotovelada();
    }
}
