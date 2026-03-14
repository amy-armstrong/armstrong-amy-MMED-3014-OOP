<?php

// returns for the defense pokemon

class DefensivePokemon extends Pokemon {

    public function defend(): string {
        return $this->name . "blocked it! The attack was not very effective!";
    }
}