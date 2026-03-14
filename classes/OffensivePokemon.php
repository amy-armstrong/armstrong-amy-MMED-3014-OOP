<?php

// returns for the offense pokemon

class OffensivePokemon extends Pokemon {

    public function attack(): string {
        return $this->name . "used a powerful attack! It was super effective!";
    }
}