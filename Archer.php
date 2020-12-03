<?php

    class Archer extends Personnage {
        function __construct($nom, $force, $niveau, $sante){
            parent::__construct($nom, $force, $niveau, $sante);
        }

        function attaquer(Cible $personnage){
            
            $this->tirer($personnage);
        }

        function tirer($perso) {
            echo $this->nom . " tire une flèche sur " . $perso->getNom() . "</br>";
            
            if($perso instanceof Guerrier){
                $perso->subirDegats($this->force + 8);
            } elseif ($perso instanceof Magicien){
                $perso->subirDegats($this->force + 10);
            } elseif ($perso instanceof Archer){
                $perso->subirDegats($this->force + 5);
            }
        }
}
    ?>