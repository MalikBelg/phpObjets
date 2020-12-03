<?php

    class Guerrier extends Personnage {
        function __construct($nom, $force, $niveau, $sante){
            parent::__construct($nom, $force, $niveau, $sante);
        }

        function attaquer(Cible $personnage){
            
            $this->frapper($personnage);
        }

        function frapper($perso) {
            echo $this->nom . " frappe " . $perso->getNom() . "</br>";
            
            if($perso instanceof Archer){
                $perso->subirDegats($this->force + 10);
            } elseif($perso instanceof Magicien){
                $perso->subirDegats($this->force + 14);
            } elseif ($perso instanceof Guerrier){
                $perso->subirDegats($this->force + 6);
            } elseif ($perso instanceof Creature){
                $perso->subirDegats($this->force + 15);
            } 
            
        }
}

?>