<?php

    include_once './objects/character.php';

class Warrior extends Character {
    // Attributes
    private $sword;

    // Constructor
    public function __construct($baseL = 10, $baseD = 6, $baseDmg = 9) {
        parent::__construct($baseL,$baseD);
        $this->setSword($baseDmg);
    }

    // Getters
    public function getSword() {
        return $this->sword;
    }
    
    // Setters
    public function setSword($sword) {
        // Secure ...
        $this->sword = $sword;
    }

    // Methods
    public function hydrate($tab){
        $this->setSword($tab["sword"]);
        $this->setLife($tab["life"]);
        $this->setDef($tab["def"]);
    }
    
}