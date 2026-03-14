<?php

// for the support pokemoln

class SupportPokemon extends Pokemon {
    public function support(): string {
        return $this->name . "healed! The entire team regained their health!";
    }
}