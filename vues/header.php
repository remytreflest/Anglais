<?php
require_once "../traitements/traitement.php";
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <title>Document</title>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Anglais</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ajouter
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarMenuLink">
                                <li><a class="dropdown-item" href="ajouterCarte.php">Ajouter une carte</a></li>
                                <li><a class="dropdown-item" href="ajouterCategorie.php">Ajouter une catégorie</a></li>
                            </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Réviser
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarMenuLink">
                                <li><h6 class="dropdown-header">Cartes à réviser</h6></li>
                                <li><a class="dropdown-item" href="reviserCarteAnFr.php">Anglais / Français</a></li>
                                <li><a class="dropdown-item" href="reviserCarteFrAn.php">Français / Anglais</a></li>
                                <li><h6 class="dropdown-header">Toutes les cartes</h6></li>
                                <li><a class="dropdown-item" href="reviserToutesLesCartesAnFr.php">Anglais / Français</a></li>
                                <li><a class="dropdown-item" href="reviserToutesLesCartesFrAn.php">Français / Anglais</a></li>
                            </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main>