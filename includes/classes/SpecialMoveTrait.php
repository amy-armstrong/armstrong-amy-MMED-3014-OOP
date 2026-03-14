<?php

//for each of the pokemons special move ability 
// shares functionality between all pokemon 

trait SpecialMoveTrait {
    public function specialMove(): string{
        return $this->name . "uses their special move!";
    }
    
}