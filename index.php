<?php

require_once "Personnage.php";
require_once "Archer.php";
require_once "Guerrier.php";
require_once "Magicien.php";


$perso1 = new Archer("Rosa", 20, 1, 100);
$perso2 = new Guerrier("Golbu", 15, 3, 170);
$perso3 = new Magicien("Arthis", 13, 2, 80);


var_dump($perso1);
var_dump($perso2);


$perso1->caracteristiques();
$perso2->caracteristiques();

$perso1->attaquer($perso2);

$perso1->caracteristiques();
$perso2->caracteristiques();







?>



