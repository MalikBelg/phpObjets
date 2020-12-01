<?php

class Personnage {

    private $nom;
    private $force;
    private $niveau;
    private $sante;
    private $mort;
    private $attaque;
   


    function caracteristiques() {
       $etat = ($this->mort)? "mort" : "vie";
       echo " [ " . $this->nom . " :" . " Force: " . $this->force . "; Niveau: " . $this->niveau . "; Santé: " . 
       $this->sante . "; Etat: " . $etat . " ] </br>";
       
    //    $degats = ($this->attaque)? "nul" : rand(5, 15);
    //    echo "Vous avez fait " . $degats . " de dégats </br>";
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

    function attaquer(Personnage $personnage){

        echo $this->nom . " attaque " . $personnage->getNom() . "</br>";
        $personnage->subirDegats($this->force);
    }

    function subirDegats(int $degats) {
        $this->sante -= $degats;
        if($this->sante <=0) {
            $this->mort = true;
        }
    }

    function levelUp(Personnage $personnage) {
        $this->niveau += 1;
        echo $this->nom . " est niveau " . $personnage->getNiveau() . " </br>"; 
    }



    

}
// Aucun code en dehors !
?>