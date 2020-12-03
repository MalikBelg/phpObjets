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
        
        if($perso instanceof Archer){
            $perso->subirDegats(16);
        } elseif($perso instanceof Magicien){
            $perso->subirDegats(22);
        }
        
    }
}

?>