<?php

    include_once './objects/character.php';

class Mage extends Character {
    // Attributes
    private $staff;

    // Constructor
    public function __construct($baseL = 10, $baseD = 6, $baseDmg = 9) {
        parent::__construct($baseL,$baseD);
        $this->setStaff($baseDmg);
    }

    // Getters
    public function getStaff() {
        return $this->staff;
    }
    
    // Setters
    public function setStaff($staff) {
        // Secure ...
        $this->staff = $staff;
    }

    // Methods
    public function describe() {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }
    
}