<?php

require_once "Personnage.php";


$perso1 = new Personnage();
$perso1->setNom("Rose");
$perso1->setForce("12");
$perso1->setNiveau("3");
$perso1->setSante("25");
$perso1->setMort(false);

$perso2 = new Personnage();
$perso2->setNom("Golbu");
$perso2->setForce("15");
$perso2->setNiveau("4");
$perso2->setSante("30");
$perso2->setMort(false);

$perso3 = new Personnage();
$perso3->setNom("Arthis");
$perso3->setForce("13");
$perso3->setNiveau("2");
$perso3->setSante("15");
$perso3->setMort(false);
var_dump($perso1);


$perso1->caracteristiques();
$perso2->caracteristiques();
$perso3->caracteristiques();








?>