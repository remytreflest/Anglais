<?php
require_once "../traitements/traitement.php";

if(!empty($_POST["newCategorie"])){

    sqlAjouterCategorie($_POST["newCategorie"]);

} else {
    header("location:../vues/ajouterCategorie.php?erreur=yes");
}