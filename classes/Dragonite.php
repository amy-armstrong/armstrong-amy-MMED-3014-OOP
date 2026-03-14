<?php

// dragonites class 
// hes one of the offensive pokemon

class Dragonite extends OffensivePokemon {
    
    use SpecialMoveTrait;
    
    public function attack(): string {
        return $this->name . "uses Draco Meteor!";
    }
}