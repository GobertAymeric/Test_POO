<?php

    include_once './objects/character.php';

class Bowman extends Character {
    // Attributes
    private $bow;

    // Constructor
    public function __construct($baseL = 10, $baseD = 6, $baseDmg = 9) {
        parent::__construct($baseL,$baseD);
        $this->setBow($baseDmg);
    }

    // Getters
    public function getBow() {
        return $this->bow;
    }
    
    // Setters
    public function setBow($bow) {
        // Secure ...
        $this->bow = $bow;
    }

    // Methods
    public function describe() {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }
}