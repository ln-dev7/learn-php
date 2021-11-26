<?php 
 $insultes = ['merde', 'con', 'mouf', 'idiot'];
 $phrase = readline("Entrer une phrase : \n");
 foreach ($insultes as $insulte) {
     $taille = strlen($insulte) - 2; // taille de l'insulte
     $lettre1 = substr($insulte, 0, 1); // Je prends l'insulte, je commence a l'index 0  et je prends qu'une seule lettre
     $lettre_fin = substr($insulte, strlen($insulte)-1, 1);
     $insulte_transform = $lettre1 . str_repeat('*', $taille) .$lettre_fin;
     $phrase = str_replace($insulte, $insulte_transform, $phrase);
 }
 echo "$phrase \n";

 $notes = [10, 20, 15];
 array_push($notes, 18, 13 );
 $somme = array_sum($notes);
 $count = count($notes);
 $moyenne = $somme / $count;
 $moyenne = round($moyenne, 3);
 echo "$moyenne de moyenne \n"; 

 // $var1 = &$var2; // Veut dire que les changements de var1 affecteront var 2

 // exit(''); - die(''); = force la fin du programme

 $mot = readline("Entrer un mot : ");
 $mot = strtolower($mot);
 $reverse = strrev($mot);
 $reverse = strtolower($reverse);
 if ($mot == $reverse) {
     echo "Ce mot est palyndrome";
 }else {
     echo "Ce mot n'est pas un palyndrome";
 }
?>