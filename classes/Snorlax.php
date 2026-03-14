<?php

// snorlax class 
// hes one of the defensive pokemon

class Snorlax extends DefensivePokemon {
    
    use SpecialMoveTrait;
    
    public function defend(): string {
        return $this->name . "used Body Slam!";
    }
}