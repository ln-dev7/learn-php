<?
    include 'functions.php';
    // require 'functions.php' ; => Veut que le fichier qu'ont ai appelle' existe si non le script ne continue pas d'exister
    // include_once; / require_once; => Si on veut appeller des fichiers qu'on ne veut pas definir en double

    $students = [
        'TI1A' => ['Leonel', 'Angel', 'Leandro', 'Marc'],
        'TI1B' => ['John', 'Pat', 'Marco']
    ];
    
    foreach ($students as $class => $liststudents) {
            echo "La classe $class : \n";
            foreach ($liststudents as $student) {
                echo "- $student \n";
            }
            echo "";
    }
    
    $nbr = null; 
    while ($nbr !== 10) {
        $nbr = (int)readline('entrer un nombre');
    }
    echo 'BON NOMBRE'; 

    $notes = [10, 7, 13, 11, 18];
    $eleves = ['Leo', 'Ngoya', [4, 5, 7]];
    $infos = [
        'nom' => 'LN',
        'prenom' => 'Dev',
        'notes' => [10, 20, 15]
    ];
    echo $eleves[2][1];
    echo $infos['nom'];
    $infos['notes'][] = 13;  
    print_r($infos['notes']);

    $moyenne = (int)readline('entrer la note:');
    if ($moyenne > 12) {
        echo "Tu as la moyenne";
    } elseif ($moyenne === 12){
        echo "Tu as juste la moyenne";
    } else {
        echo "Tu m'as pas la moyenne";
    }
    $action = readline('entrer votre action');
    switch ($action) {
        case 1:
           echo 'J\'attaque'; 
            break;
        case 2:
            echo 'Je defends';
            break;
        default:
            echo 'Choix invalide';
            break;
    }
?>