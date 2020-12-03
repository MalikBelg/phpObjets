<?php

class Archer {

    private $nom;
    private $force;
    private $niveau;
    private $sante;
    private $mort;
 
   

    function __construct($nom, $force, $niveau = 1, $sante = 100){
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

    function attaquer(Guerrier $personnage){
        
        $this->tirer($personnage);
    }

    function tirer($perso) {
        echo $this->nom . " tire une flèche sur " . $perso->getNom() . "</br>";
        $perso->subirDegats($this->force);
    }

    function subirDegats(int $degats) {
        $this->sante -= $degats;
        if($this->sante <=0) {
            $this->mort = true;
        }
    }

    function levelUp(Guerrier $personnage) {
        $this->niveau++;
        echo $this->nom . " est niveau " . $personnage->getNiveau() . " </br>"; 
    }

    

}
// Aucun code en dehors !
?>