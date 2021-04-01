<?php
require_once "../traitements/traitement.php";

if(!empty($_POST["anglais"]) && !empty($_POST["francais"]) && !empty($_POST["categorie"])){

    sqlAjouterCarte($_POST["anglais"], $_POST["anglaisDescription"], $_POST["francais"], $_POST["francaisDescription"], $_POST["categorie"]);

} else {
    header("location:../vues/ajouterCarte.php?erreur=yes");
}