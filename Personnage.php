<?php

class Personnage {

    private $nom;
    private $force;
    private $niveau;
    private $sante;
    private $mort;


    function caracteristiques() {
       $etat = ($this->mort)? "mort" : "vie";
        echo " [ " . $this->nom . " :" . " Force: " . $this->force . "; Niveau: " . $this->niveau . "; Santé: " . 
       $this->sante . "; Etat: " . $this->mort . " ] ";
    }

    function setNom(string $nomperso) {
        $this->nom = $nomperso;
    }

    function getNom() : string {
        return $this->nom;
    }

    function setForce(int $for) {
        $this->force = $for;
    }

    function setNiveau(int $niv) {
        $this->niveau = $niv;
    }

    function setSante(int $vie)  {
        $this->sante = $vie;

    }
    
    function setMort(bool $mortperso) {
        $this->mort = $mortperso;

    }

    function getNiveau(): ?int {
        return $this->niveau;
    }

    function getSante(): ?int {
        return $this->sante;
    }

    function isMort() ?bool {  
        return $this->mort;
    }


    // function attaquer() {

    //     if () {
            
    //     }
    // }


    

}
// Aucun code en dehors !
?>