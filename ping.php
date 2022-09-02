<?php


$pingList = [];
// affiche les choix 1, 2 ou 3
    $userChoice = readline("Quel action voulez-vous faire ?\n 
    1 - Lancement du Ping\n
    2 - Ajout d'une URL\n
    3 - Suppression d'une URL\n
    4 - Sortir du programme");
    if ($userChoice == "1") {
        echo "Ping run";
    }
    elseif ($userChoice == "2") {
        // 2 = Ajout d'une url
        // récupere saisie url
        $entree = readline("Entrer l'url que vous voulez ping : ");
        var_dump($entree);
        // ajoute dans tableau contenant les url des sites à ping
        array_push($pingList, $entree);
        var_dump($pingList);

    }
    elseif ($userChoice == "3") {
        echo "suppression d'une url";
        // affiche liste url avec leur index
        foreach ($pingList as $key => $value){
            echo $key + 1 . " - " .$value;
        }
        // récupére la saisie de l'utilisateur
        $url_delete = readline("Indiquer le numéro de l'url que vous voulez supprimer : ");
        // supprime l'url du tableau
        unset($pingList[int($url_delete)]);
        print_r(array_values($pingList));
        }
    elseif ($userChoice == "4"){
        exit("Au revoir !");
    }


