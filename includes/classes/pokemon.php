<?php

//parent class, root for all the other pokemon. classes to extend from

class Pokemon {

//properties describing each of the pokemons
    protected string $name;
    protected string $type;
    protected string $ability; 

//constructs the pkemon with a name, typr and abilsity 
    public function __construct(string $name, string $type, string $ability) {
        $this->name = $name;
        $this->type = $type;
        $this->ability = $ability;
    }

// offense method
    public function attack(): string{
        return $this->name . "attacks! Super effective!";
    }

// defense method
    public function defend(): string{
        return $this->name . "blocked the hit! It wasn't very effective.";
    }

// support method
    public function support(): string{
        return $this->name . "restored their HP! They became healthy!";
    }

// returns infp about the pokemon
    public function getInfo(): string{
        return "{$this->name}, {$this->type}, {$this->ability}";
    }
}