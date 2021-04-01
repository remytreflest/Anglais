<?php

function sqlAjouterCategorie($_POSTnewCategorie){

    $requete = getBdd()->prepare("INSERT INTO categories(libelle) VALUES (?)");
    $requete->execute([$_POSTnewCategorie]);

    header("location:../vues/ajouterCategorie.php?success=yes");

}