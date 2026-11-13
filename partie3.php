<?php
class Personne {
    private string $nom = "";
    private string $prenom = "";
    private string $dateNaissance = "";

    public function __set(string $name, mixed $value): void {
        // TODO : n'autoriser que les propriétés existantes
        // Indice : property_exists($this, $name)
        // Sinon : afficher un message "Propriété $name inexistante"
        if (property_exists($this, $name)) {
            $this->$name = $value; 
        }
        else {
            echo "Propriété $name inexistante";
        }
    }

    public function __get(string $name): mixed {
        // TODO : retourner la valeur si la propriété existe, sinon null
        if( property_exists($this,$name)){
            return $this->name;
        }
        else{
            return null;
        }
    }

    public function __isset(string $name): bool {
        return isset($this->$name);
        
    }

    public function __unset(string $name): void {
        if (property_exists($this, $name)) {
            $this->$name = ""; 
        }
    }
}

$p = new Personne();
$p->nom = "Hachimi";             // → __set
echo $p->nom . PHP_EOL;         // → __get
var_dump(isset($p->nom));       // → __isset
unset($p->nom);                 // → __unset 
var_dump(isset($p->nom));
$p->telephone = "0600000000"; 

/* 3.2 sans --set():
 si en écrivant `$p->nom = "X"`  sans la methode logique '--set()' 
va provoque un Fatal error car 'nom' est un attribut privee 

avec --set():
la methode logique set permet de l'ecriture d'un attribut inaccessible

*/

/*3.3 oui car le concept de l encapsulation c'est de 
cacher les information sensible alors c;est contradictoire a __set*/

