<?php
    // On veut demander a l' utilisateur de rentrer les horaires d'ouverture d'un magasin
    // On demande a l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert
    // Donner les horaires d'ouvertures du magasiiin
     $creneaux = [];
     while (true) {
         $debut = (int)readline('Heure d\' ouverture du creneau : ');
         $fin = (int)readline('Heure de fermeture : ');
         if ($debut >= $fin) {
             echo "Le creneau ne peut pas etre enregistre car l'heure d' ouverture ($debut)h est superieur a l'heure de fermeture ($fin)\n";
         } else {
             $creneaux[] = [$debut, $fin];
             $action = readline('voulez vous ajouter un nouveau creneau ? (n : pour non )');
             if ($action === 'n') {
                 break;
             }
         } 
     }

     $heure = (int)readline("A quel heure voulez vous visiter le magasin ?\n");
     $creneauTrouve = false;
     foreach ($creneaux as $creneau ) {
         if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
            $creneauTrouve = true;
            break;
         }
     }
     if ($creneauTrouve) {
         echo "Le magasin sera ouvert\n";
     } else {
         echo "Le magsin sera ferme\n";
     }

     echo "Le magasin est ouvert de : \n"; 
     foreach ($creneaux as $key  => $horaire) {
        //  if ($key > 0) {
        //      echo ' et de ';
        //  }
        //  echo "{$creneau[0]}h a {$creneau[1]}h \n";
       echo "- $horaire[0]h a $horaire[1]h \n";
     }

    // Demander a l'utilisateur de rentrer une note ou de taper "fin"
    // chaque note est sauvegarde' dans un tableau $notes (pensez $notes[])
    // a la fin on affiche le tableau de note sous forme de liste 
    $action = null;
    $notes = [];
    while ($action !== "fin") {
        $action = readline('entrer une note');
        if ($action !== "fin") {
            $notes[] =(int)$action;
        }
    }
    foreach ($notes as $note) {
        echo "- $note \n"; 
    }
?>