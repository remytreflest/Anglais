<?php

function sqlAjouterCarte($_POSTanglais, $_POSTanglaisDescription, $_POSTfrancais, $_POSTfrancaisDescription, $_POSTcategorie){

    $requete = getBdd()->prepare("INSERT INTO touteslescartes(anglais, anglaisDescription, francais, francaisDescription, idCategorie) VALUES (?, ?, ?, ?, ?)");
    $requete->execute([$_POSTanglais, $_POSTanglaisDescription, $_POSTfrancais, $_POSTfrancaisDescription, $_POSTcategorie]);

    header("location:../vues/ajouterCarte.php?success=yes");

}