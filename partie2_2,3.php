<?php
class Voiture {
    public function __construct(public string $couleur) {
        echo "Voiture {$this->couleur} créée." . PHP_EOL;
    }

    public function __destruct() {
        echo "Voiture {$this->couleur} détruite." . PHP_EOL;
    }
}
echo "<h3>2.3Le destructeur</h3>";

$maVoiture = new Voiture("Blanche");
// unset($maVoiture); 
$a=new Voiture("noire");
$b=new Voiture("vert");

echo "Fin du script." . PHP_EOL;

/*2.3.a avec `unset(...)` les trois messages s'affichent-ils a ce ordre:
'Voiture Blanche créée. Voiture Blanche détruite. Fin du script.'
*/

 /* 2.3.b sans `unset(...)` es trois messages s'affichent-ils a ce ordre:
 'Voiture Blanche créée. Fin du script. Voiture Blanche détruite.'
 */

 /*2.3.c les objets sont detruits dans l'ordre inverse de leur création*/

 