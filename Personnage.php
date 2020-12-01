<?php

class Personnage {

    private $nom;
    private $force;
    private $niveau;
    private $sante;
    private $etat;


    function caracteristiques() {
       echo " [ " . $this->nom . " :" . " Force: " . $this->force . "; Niveau: " . $this->niveau . "; Santé: " . 
       $this->sante . "; Etat: " . $this->etat . " ] ";
    }

    function setNom(string $nomperso) {
        $this->nom = $nomperso;
    }

    function getNom() {
        return $this->nom;
    }

    function setForce(int $for) {
        $this->force = $for;
    }

    function setNiveau(int $niv) {
        $this->niveau = $niv;
    }

    function setSante(int $vie) {
        $this->sante = $vie;
    }
    
    function setEtat(string $etatperso) {
        $this->etat = $etatperso;

    }


    

}
// Aucun code en dehors !
?>