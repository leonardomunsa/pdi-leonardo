<?php

class Lutador
{
    public function __construct(Golpe $golpe)
    {
        $this->golpe = $golpe;
    }

    public function golpear($golpe)
    {
        $this->golpe->golpear($golpe);
    }
}
