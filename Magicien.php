<?php

class Magicien extends Personnage {
    function __construct($nom, $force, $niveau, $sante){
        parent::__construct($nom, $force, $niveau, $sante);
    }

    function attaquer(Personnage $personnage){
        
        $this->lancerSort($personnage);
    }

    function lancerSort($perso) {
        echo $this->nom . " lance un sort sur " . $perso->getNom() . "</br>";
        $perso->subirDegats(rand(10, 20));
    }

}


?>