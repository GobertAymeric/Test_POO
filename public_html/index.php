<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php

    include_once './objects/Warrior.php';
    include_once './objects/Mage.php';
    include_once './objects/Bowman.php';
    include_once './objects/Manager.php';

    // MVC  (Model View Controller)
    // $warriorOne = new Character;
    // $warriorOne->describe();

    // $warriorOne->setLife(20);
    // $warriorOne->setDef(6);
    // $warriorOne->describe();

    // $warriorTwo = new Character(20, 6);
    // $warriorTwo->describe();

    $warriorOne = new Warrior(15, 6, 9);
    $warriorOne->describe();
    
    $warriorTwo = new Warrior(20, 5, 8);
    $warriorTwo->describe();

    $tab = [
        "sword" => 13,
        "life" => 45,
        "def" => 4500
    ];

    $warriorThree = new Warrior;
    $warriorThree->hydrate($tab);
    $warriorThree->describe();

    // Attaque
    $warriorThree->setLife(4);
    

    $mageOne = new Mage(10, 0, 10);
    $mageOne->describe();

    $mageTwo = new Mage(20, 5, 80);
    $mageTwo->describe();

    $bowmanOne = new Bowman(12, 3, 12);
    $bowmanOne->describe();

    $bowmanTwo = new Bowman(20, 5, 35);
    $bowmanTwo->describe();

    $manager = new Manager;
    $manager->update($warriorThree);

    ?>
</body>
</html>