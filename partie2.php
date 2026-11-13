<?php
class Voiture {
    public string $couleur;
    public int $vitesse;

    public function __construct(string $couleur = "Blanche", int $vitesse = 0) {
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
    }

    public function afficher(): void {
        echo "Couleur : {$this->couleur} | Vitesse : {$this->vitesse} km/h" . PHP_EOL;
    }

    //2.1 tester le constructeur avec la promotion de propriétés :
    /*public function __construct(
    public string $couleur = "Blanche",
    public int $vitesse = 0
) {} */
}


$v1 = new Voiture();              
$v2 = new Voiture("Rouge", 50);
$v1->afficher();
$v2->afficher();
//2.1 
$v3=new voiture("noire");
$v4=new voiture(120);
echo "<br><br>";
echo 'avec `new Voiture("Noire"):'."<br>";
$v3->afficher();
echo "<br><br>";
echo 'avec `new Voiture(120):'."<br>";
$v4->afficher();



//Questions
/* 2.1.a avec  avec `new Voiture("Noire") l'attribut couleur prent 'noire'
 et l'attribut vitesse prent la valeure par defaut ' 0 km/h'.
avec `new Voiture(120)` l'attribut couleur prent '120' est un int 
alors que le 1er paramètre est un type string
 et l'attribut vitesse prent la valeure par defaut ' 0 km/h'. */
 
 /*2.1.b avec promotion de propriétés en declare l'attribut et le parametre et 
 aussi l'affectation  en meme temps alors le code et visible et courte*/


 /*2.2.a l'excution des deux constructeurs dans la partie1 provoque un Fatal error 
 car en php en peut pas declarer deux ou plusieure constructeur dans la meme classe */

 /*2.2.b la solution** pour obtenir les deux comportements et avec un seul constructure est:
 public function __construct(
        public string $nom="hachimi",
        public string $prenom="sara",
        private string $dateNaissance="2000-01-01",
        private string $villeNaissance="marrakech",
        private string $cin="EE123456"
    ) 
  creation vide:
  $p1=new personne();
  creation avec informations:
$p1=new personne("moumine", "fatima ezzahra", "2006-07-04", "marrakech", "g130245217")

*/

/* */





 ?>

