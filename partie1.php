<?php
class Personne {

    // ----- Attributs publics -----
    public string $nom;
    public string $prenom;

    // ----- Attributs privés -----
    private string $dateNaissance;   // format "AAAA-MM-JJ"
    private string $villeNaissance;
    private string $cin;

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

    // ----- Méthode publique -----
    public function getName(): string {
        // retourner "Prénom Nom"
        return $this->prenom ." ".$this->nom;
    }

    // ----- Méthode privée -----
    private function getAge(): int {
        // TODO : calculer l'âge avec DateTime
        $naissance = new DateTime($this->dateNaissance);
        $aujourdhui = new DateTime();
        $age=$naissance->diff($aujourdhui)->format("%y");
        return $age;
    }


}
$p = new Personne("Hachimi", "Sara", "2000-05-14", "Marrakech", "EE123456");

echo $p->getName() . PHP_EOL;   // à vous de prédire le résultat
echo $p->nom . PHP_EOL;

echo $p->cin;  //error car cin est un attribut prive "private" pas accessible 
echo $p->dateNaissance; //error car dateNaissan est un attribut prive "private" 
echo $p->getAge(); //error car getage est un methode prive "private" 