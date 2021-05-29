<?php

class Character {

    private $strength = 20;
    private $location;
    private $experience = 0;
    private $damages = 0;

    public function displayExperience() {
        echo $this->experience;
    }

    public function gainExperience() {
        $this->experience = $this->experience + 1;
    }
}