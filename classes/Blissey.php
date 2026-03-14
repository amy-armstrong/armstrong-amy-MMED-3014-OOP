<?php

// blissey class 
// shes one of the support pokemon

class Blissey extends SupportPokemon {
    
    use SpecialMoveTrait;
    public function support(): string{
        return $this->name . "used Wish!";
    }
}