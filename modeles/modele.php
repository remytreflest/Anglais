<?php

function getBdd() {
    return new PDO('mysql:host=localhost;dbname=anglais;charset=UTF8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

require_once "../modeles/reviser.php";
require_once "../modeles/ajouterCarte.php";
require_once "../modeles/categories.php";