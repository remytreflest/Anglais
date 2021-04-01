<?php

function sqlCarteAn(){

    $requete = getBdd()->prepare("SELECT idCarte, anglais, anglaisDescription, francais, francaisDescription, categories.libelle as libelleCat, statuts.libelle as libelleSta FROM `touteslescartes` LEFT JOIN categories USING(idCategorie) LEFT JOIN statuts ON idStatutAN = statuts.idStatut WHERE activiteAN IS NULL OR ( activiteAN < DATE(NOW()) AND (idStatutAN = 2 OR idStatutAN = 3)) OR (idStatutAN IS NULL OR idStatutAN = 1)");
    $requete->execute();

    return $requete->fetchALL(PDO::FETCH_ASSOC);

}

function sqlCarteStatutAn($POST_apprentissage, $POST_idcarte){

    $requete = getBdd()->prepare("UPDATE touteslescartes SET idStatutAN = ?, activiteAN = DATE(NOW()) WHERE idCarte = ?");
    $requete->execute([$POST_apprentissage, $POST_idcarte]);

    header("location:../vues/reviserCarteAnFr.php");

}


function sqlCarteFR(){

    $requete = getBdd()->prepare("SELECT idCarte, anglais, anglaisDescription, francais, francaisDescription, categories.libelle as libelleCat, statuts.libelle as libelleSta FROM `touteslescartes` LEFT JOIN categories USING(idCategorie) LEFT JOIN statuts ON idStatutFR = statuts.idStatut WHERE activiteFR IS NULL OR ( activiteFR < DATE(NOW()) AND (idStatutFR = 2 OR idStatutFR = 3)) OR (idStatutFR IS NULL OR idStatutFR = 1)");
    $requete->execute();

    return $requete->fetchALL(PDO::FETCH_ASSOC);

}

function sqlCarteStatutFR($POST_apprentissage, $POST_idcarte){

    $requete = getBdd()->prepare("UPDATE touteslescartes SET idStatutFR = ?, activiteFR = DATE(NOW()) WHERE idCarte = ?");
    $requete->execute([$POST_apprentissage, $POST_idcarte]);

    header("location:../vues/reviserCarteFrAn.php");

}

function sqlCarteAll(){

    $requete = getBdd()->prepare("SELECT idCarte, anglais, anglaisDescription, francais, francaisDescription, categories.libelle as libelleCat, statuts.libelle as libelleSta FROM `touteslescartes` LEFT JOIN categories USING(idCategorie) LEFT JOIN statuts ON idStatutFR = statuts.idStatut ORDER BY idCarte ASC");
    $requete->execute();

    return $requete->fetchALL(PDO::FETCH_ASSOC);

}

function sqlCategories(){

    $requete = getBdd()->prepare("SELECT idCategorie, libelle FROM categories");
    $requete->execute();

    return $requete->fetchALL(PDO::FETCH_ASSOC);

}

function sqlCarteAllWithCategorie($GETcategorie){

    $requete = getBdd()->prepare("SELECT idCarte, anglais, anglaisDescription, francais, francaisDescription, categories.libelle as libelleCat, statuts.libelle as libelleSta FROM `touteslescartes` LEFT JOIN categories USING(idCategorie) LEFT JOIN statuts ON idStatutFR = statuts.idStatut WHERE idCategorie = ? ORDER BY idCarte ASC");
    $requete->execute([$GETcategorie]);

    return $requete->fetchALL(PDO::FETCH_ASSOC);

}
