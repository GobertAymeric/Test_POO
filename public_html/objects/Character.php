<?php

class Character {

    // Attributes
    private $life;
    private $def;

    // Constructor
    public function __construct($baseL = 10, $baseD = 6) {
        $this->setLife($baseL);
        $this->setDef($baseD);
    }

    // Getters
    public function getLife() {
        return $this->life;
    }
    public function getDef() {
        return $this->def;
    }

    // Setters
    public function setLife($life) {
        // Secure ...
        $this->life = $life;
    }
    public function setDef($def) {
        // Secure ...
        $this->def = $def;
    }

    // Methods
    public function describe() {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
        // var_dump($this);
    }

}