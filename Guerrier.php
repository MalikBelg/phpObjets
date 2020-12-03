<?php

class Guerrier extends Personnage {
    function __construct($nom, $force, $niveau, $sante){
        parent::__construct($nom, $force, $niveau, $sante);
    }

    function attaquer(Personnage $personnage){
        
        $this->frapper($personnage);
    }

    function frapper($perso) {
        echo $this->nom . " frappe " . $perso->getNom() . "</br>";
        $perso->subirDegats(rand(8, 14));
    }
}

?>