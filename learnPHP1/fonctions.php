<? 
// declare(strict_types=1); // Demande a PHP d'empecher les convertions implicites
// On peut typer le PHP 
// -> En mettant le type d'un parametre d'une fonction devant la declaration du parametre
// -> En mettant le type de la valeur retourner par la fonction apres les parantheses suivi d'un :
// ?array veut dire qu'on aura un type array ou un type null
 function demader_creneaux (string $phrase = 'Veuillez entrer vos creneaux : '): array {
     $creneaux = []; 
     $continuer = true;
     while ($continuer) {
         $creneaux[] = demander_creneau();
         $continuer = repondre_oui_non('Voulez vous continuer ?');
     }
     return $creneaux;
 }

 function demander_creneau (string $phrase = 'Veuillez entrer un creneau'): array {
    echo "$phrase \n";
        while (true) {
            $ouverture = (int)readline('Heure d\' ouverture : ');
            if ($ouverture >= 0 && $ouverture <= 23) {
                break;
            }
        }
        while (true) {
            $fermeture = (int)readline('Heure de fermeture : ');
            if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture) {
                break;
            }
        }
        return [$ouverture, $fermeture];
 }

 function repondre_oui_non(string $phrase): bool {
     $bool = false;
     while (true) {
        $q = readline("$phrase oui(o) ou non (n) \n");
        if ($q === 'o') {
            $bool = true;
            break;
        }
        if ($q === 'n') {
            $bool = false;
            break;
        }
     }
     return $bool;
 } 

 var_dump(demader_creneaux());
?>