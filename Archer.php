<?php

class Archer extends Personnage {
    function __construct($nom, $force, $niveau, $sante){
        parent::__construct($nom, $force, $niveau, $sante);
    }

    function attaquer(Personnage $personnage){
        
        $this->tirer($personnage);
    }

    function tirer($perso) {
        echo $this->nom . " tire une flèche sur " . $perso->getNom() . "</br>";
        $perso->subirDegats(rand(5, 10));
    }
}
    ?>