<?php

require_once "Personnage.php";


$perso1 = new Personnage("Rosa", 20, 1, 100);
$perso2 = new Personnage("Golbu", 15, 3, 170);
$perso3 = new Personnage("Arthis", 13, 2, 80);


var_dump($perso1);
var_dump($perso2);
var_dump($perso3);



$perso1->caracteristiques();
$perso2->caracteristiques();
$perso3->caracteristiques();



?>



