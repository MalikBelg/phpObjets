<?php

class Personnage {

    protected $nom;
    protected $force;
    protected $niveau;
    protected $sante;
    protected $mort;
 
   

    function __construct($nom, $force, $niveau, $sante){
        $this->nom = $nom;
        $this->force = $force;
        $this->niveau = $niveau;
        $this->sante = $sante;
        $this->mort = false;        
    }


    function caracteristiques() {
       $etat = ($this->mort)? "mort" : "vie";
       echo " [ " . $this->nom . " :" . " Force: " . $this->force . "; Niveau: " . $this->niveau . "; Santé: " . 
       $this->sante . "; Etat: " . $etat . " ] </br>";
       
    }

    function setNom(string $nomperso) {
        $this->nom = $nomperso;
    }

    function getNom() : string {
        return $this->nom;
    }

    function setForce(int $for) {
        $this->force = $for;
        return true;
    }

    function setNiveau(int $niv) {
        $this->niveau = $niv;
    }
 
    function getNiveau(): ?int {
        return $this->niveau;
    }
 
    function setSante(int $vie)  {
        $this->sante = $vie;

    }

    function getSante(): ?int {
        return $this->sante;
    }    
 
    function setMort(bool $mortperso) {
        $this->mort = $mortperso;

    }
 
    function isMort(): ?bool {  
        return $this->mort;
    }

    function subirDegats(int $degats) {
        $this->sante -= $degats;
        if($this->sante <=0) {
            $this->mort = true;
        }
    }

    function levelUp() {
        $this->niveau++; 
    }

}

class Archer extends Personnage {
    function __construct($nom, $force, $niveau, $sante){
        parent::__construct($nom, $force, $niveau, $sante);
    }

    function attaquer(Personnage $personnage){
        
        $this->tirer($personnage);
    }

    function tirer($perso) {
        echo $this->nom . " tire une flèche sur " . $perso->getNom() . "</br>";
        $perso->subirDegats($this->force);
    }

}

class Guerrier extends Personnage {
    function __construct($nom, $force, $niveau, $sante){
        parent::__construct($nom, $force, $niveau, $sante);
    }

    function attaquer(Personnage $personnage){
        
        $this->frapper($personnage);
    }

    function frapper($perso) {
        echo $this->nom . " frappe " . $perso->getNom() . "</br>";
        $perso->subirDegats($this->force);
    }
}

class Magicien extends Personnage {
    function __construct($nom, $force, $niveau, $sante){
        parent::__construct($nom, $force, $niveau, $sante);
    }

    function attaquer(Personnage $personnage){
        
        $this->lancerSort($personnage);
    }

    function lancerSort($perso) {
        echo $this->nom . " lance un sort sur " . $perso->getNom() . "</br>";
        $perso->subirDegats($this->force);
    }

}


// Aucun code en dehors !
?>