<?php

// gengars class 
// hes one of the offensive pokemon

class Gengat extends OffensivePokemon {
    
    use SpecialMoveTrait;
    public function attack(): string{
        return $this->name . "uses Shadow Ball!";
    }
}