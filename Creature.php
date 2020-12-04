<?php

class Creature implements Attaquant, Cible {

    protected $race;
    protected $sante;
    protected $mort;

    function __construct($race, $sante){
        $this->race = $race;
        $this->sante = $sante;
        $this->mort = false;
    }


    function caracteristiques() {
        $etat = ($this->mort)? "mort" : "vie";
        echo " [ " . $this->race . ": Santé: " . $this->sante . "; Etat: " . $etat . " ] </br>";
         }
    
    function setNom(string $raceCreature) {
        $this->race = $raceCreature;
    }
    
    function getNom() : string {
        return $this->race;
    }

    function attaquer(Cible $perso){
        $perso->subirDegats(rand(10, 20));
        echo $this->race . " attaque " . $perso->getNom() . " ! </br>";
    } 

    function subirDegats(int $degats){
        $this->sante -= $degats;
        if($this->sante <=0) {
            $this->mort = true;
        }
    }


    function setMort(bool $mortperso) {
        $this->mort = $mortperso;

    }
 
    function isMort(): ?bool {  
        return $this->mort;
    }
}

?>