<?php

    class Magicien extends Personnage {
        function __construct($nom, $force, $niveau, $sante){
            parent::__construct($nom, $force, $niveau, $sante);
        }

        function attaquer(Cible $personnage){
            
            $this->lancerSort($personnage);
        }

        function lancerSort($perso) {
            echo $this->nom . " lance un sort sur " . $perso->getNom() . "</br>";
            
            if($perso instanceof Archer){
                $perso->subirDegats($this->force + 18);  
            } elseif($perso instanceof Guerrier){
                $perso->subirDegats($this->force + 25);
            } elseif ($perso instanceof Magicien){
                $perso->subirDegats($this->force + 5); 
            }  elseif ($perso instanceof Creature){
                $perso->subirDegats($this->force + 19);
            } 
            
        }

    }

?>