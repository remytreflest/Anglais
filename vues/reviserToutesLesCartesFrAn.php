<?php
require_once "header.php";

$sensRevision = "FR-AN";
if(empty($_GET["categorie"])){

    $cartes = sqlCarteAll();

} else {

    $cartes = sqlCarteAllWithCategorie($_GET["categorie"]);

}

$categories = sqlCategories();
$i = 0;
if(count($cartes) > 0 && !empty($_GET["carte"])){
    $i = $_GET["carte"];
    if(isset($cartes[$i])){
        $unecarte = $cartes[$i];
    }
} else if (count($cartes) > 0 && empty($_GET["carte"])){
    $unecarte = $cartes[$i];
}

// on selectionne 1 carte aléatoire parmis toutes les cartes répondant aux critères
if(count($cartes) > 0 && isset($cartes[$i])){

    ?>

    <form method="get" class="row col-4 offset-4 pt-3">
        <div class="input-group">
            <select name="categorie" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                <option value="0" <?=(!empty($_GET["categorie"])) ? "" : "selected";?>>Choose...</option>
                <?php
                    foreach($categories as $categorie){
                        ?>
                            <option value="<?=$categorie["idCategorie"];?>" <?=(!empty($_GET["categorie"]) && $_GET["categorie"] == $categorie["idCategorie"]) ? "selected" : "";?>><?=$categorie["libelle"];?></option>
                        <?php
                    }
                ?>
            </select>
            <button class="btn btn-outline-success" type="submit">Validez</button>
        </div>
    </form>

    <div class="text-center mt-3">Nombre de carte à réviser : <?=count($cartes);?></div>
    <div class="container">
        <div id="lacarte" class="lacarte card <?=!empty($_GET["retourner"]) ? "rotate" : "";?>">
            <div id="devant" class="card">
                <div class="card-header text-center"><?=$unecarte["libelleCat"];?></div>
                <div class="card-body">
                    <div class="card-text text-center"><?=$unecarte["francais"];?></div>
                    <div class="blockquote-footer text-center"><?=$unecarte["francaisDescription"];?></div>
                    <button id="retourner" class="btn btn-success">Retourner la carte</button>
                    <div id="numeroCarte" class="text-center">Carte n°<?=$unecarte["idCarte"];?></div>
                </div>
            </div>
            <div id="derriere" class="card">
                <div class="card-header text-center"><?=$unecarte["libelleCat"];?></div>
                <div class="card-body">
                    <div class="card-text text-center"><?=$unecarte["anglais"];?></div>
                    <div class="blockquote-footer text-center"><?=$unecarte["anglaisDescription"];?></div>
                    <div id="button2" class="btn-group my-3">
                            <a class="btn btn-outline-success" href="<?php if(!empty($_GET['categorie'])){
                                echo 'reviserToutesLesCartesFrAn.php?categorie=' . $_GET['categorie'] . '&carte=' . ($i + 1);
                            } else {
                                echo 'reviserToutesLesCartesFrAn.php?carte=' . ($i + 1);
                            };?>">Suivant</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php

} else {

    ?>
    <form method="get" class="row col-4 offset-4 pt-3">
        <div class="input-group">
            <select name="categorie" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                <option value="0" selected>Choose...</option>
                <?php
                    foreach($categories as $categorie){
                        ?>
                            <option value="<?=$categorie["idCategorie"];?>"><?=$categorie["libelle"];?></option>
                        <?php
                    }
                ?>
            </select>
            <button class="btn btn-outline-secondary" type="submit">Validez</button>
        </div>
    </form>

    <?php
        if(count($cartes) == 0){
            ?>
            <div class="alert alert-warning mt-3">Il n'y a pas encore de carte pour cette catégorie, désolé !</div>
            <?php
        } else {
    ?>
    <div class="alert alert-success mt-3">Vous n'avez aucune carte à réviser dans cette catégorie !</div>
    <?php
        }

}
?>


<script src="../js/script.js"></script>

<?php
require_once "footer.php";
?>