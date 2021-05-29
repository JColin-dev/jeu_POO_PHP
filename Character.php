<?php

class Character {

    private $strength;
    private $location;
    private $experience = 50;
    private $damages;

    public function displayExperience() {
        echo $this->experience;
    }

    public function gainExperience() {
        $this->experience = $this->experience + 1;
    }
}