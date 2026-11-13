<?php
class Voiture {
    public $marque;
    public $couleur;

    public function setMarque($m) {
        $this->marque = $m; 
    }    

    public function setCouleur($c) {
        $this->couleur=$c;
    }

    public function afficher() {
        echo "Marque : " . $this->marque . PHP_EOL ." "."coleure:"." ".$this->couleur."<br>";
    }
}

$v1 = new Voiture();
$v1->setMarque("Toyota");
$v1->setCouleur("noire");
$v1->afficher();
//Q 0,1
$v2 = new Voiture();
$v2->setMarque("Renault");
$v2->setCouleur("rouge");
$v2->afficher();


