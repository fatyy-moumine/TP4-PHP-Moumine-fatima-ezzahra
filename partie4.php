<?php 
class Personne {

    // ----- Attributs publics -----
    public string $nom;
    public string $prenom;

    // ----- Attributs privés -----
    private string $dateNaissance; 
    private string $villeNaissance;
    private string $cin;      

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
    
    private function getAge(): int {
        // calcule l'âge avec DateTime
        $naissance = new DateTime($this->dateNaissance);
        $aujourdhui = new DateTime();
        $age=$naissance->diff($aujourdhui)->format("%y");
        return $age;
    }

    public function __toString():string{                                 /*  teste `__toString()` retourne un entier : public function __toString():int*/
        return $this->prenom." ".$this->nom ."(".$this->getAge()." ans)";   
    }



}
$per=new Personne("Hachimi", "Sara", "2000-05-14", "Marrakech", "EE123456");
echo $per;


/* 4.1 la methode  `getAge()` est fonctionne 
 meme que il est privee car on la appelle a l'interieure de class */

 /* 4.2  si `__toString()` retourne un entier va provoque un erreur car la methode `__toString()` affiche l'objet comme un chaine */