<?php
class Personne {

    // ----- Attributs publics -----
    public string $nom;
    public string $prenom;

    // ----- Attributs privés -----
    private string $dateNaissance; 
    private string $villeNaissance;
    private string $cin;      //  private string $cin;  Fatal error 

    // ----- Constructeur -----
    public function __construct(
        string $nom,
        string $prenom,
        string $dateNaissance,
        string $villeNaissance,
        string $cin
    ) {
        // initialisation  les 5 attributs avec $this->
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->dateNaissance=$dateNaissance;
        $this->villeNaissance=$villeNaissance;
        $this->cin=$cin;
    }


//partie2 2.2 test du code en deux constructeur

//     public function __construct() {
//     echo "Création " . __CLASS__ . PHP_EOL;
//     }
//     public function __construct(string $nom, string $prenom) {
//         $this->nom = $nom;                                      //Fatal error
//         $this->prenom = $prenom;
// }

    

    // ----- Méthode publique -----
    public function getName(): string {
        // retourner "Prénom Nom"
        return $this->prenom ." ".$this->nom;
    }

    // ----- Méthode privée -----
    private function getAge(): int {
        // calcule l'âge avec DateTime
        $naissance = new DateTime($this->dateNaissance);
        $aujourdhui = new DateTime();
        $age=$naissance->diff($aujourdhui)->format("%y");
        return $age;
    }

}



$p = new Personne("Hachimi", "Sara", "2000-05-14", "Marrakech", "EE123456");

echo $p->getName() . PHP_EOL;  
echo $p->nom . PHP_EOL;

echo $p->cin;  //error car cin est un attribut prive "private" pas accessible 
echo $p->dateNaissance; //error car dateNaissan est un attribut prive "private" 
echo $p->getAge(); //error car getage est un methode prive "private" 

//Questions
/* 1.1 l;affichage de 'cin' et 'dateNaissan' et la methode 'getAge()' qui  provoque les erreur car ils sont pas accessible */
/*1.2 il dangereux de laisser `cin` en `public` car ce donne et sensible et important alors mieux de laisser 'cin' en 'private'  */
/*1.4 le chagement de la visibilité de `cin` en `protected` ne change pas la resultat il reste provoque ereur car 'protected' accessible a l'interieure de classe et
dans les classes qui en héritent */
