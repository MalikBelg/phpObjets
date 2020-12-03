<?php

abstract class Personnage implements Attaquant, Cible {

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



    abstract function attaquer(Cible $personnage);



    function subirDegats(int $degats) {
        $this->sante -= $degats;
        if($this->sante <=0) {
            $this->mort = true;
        }
    }

    
    function levelUp() {
        $this->niveau++;
        $this->force += rand(5, 10);
        echo $this->nom . " passe niveau " . $this->niveau . " ! " . "Sa force passe à " 
        . $this->force . " ! </br>";
        
    }

}


// Aucun code en dehors !
?>