<?php

if(count($cartes) > 0 && !isset($_POST["apprentissage"])){
    $unecarte = $cartes[rand(0, count($cartes) - 1)];
}

// on selectionne 1 carte aléatoire parmis toutes les cartes répondant aux critères
if(count($cartes) > 0){

    ?>
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
                </div>
            </div>
        </div>
    </div>
    <?php

} else {

    ?>
    <div class="alert alert-success">Vous n'avez aucune carte à réviser pour l'instant !</div>
    <?php

}
?>

<div id="button" class="btn-group my-3">
    <form method="post" action="../traitements/reviser.php">
        <button type="submit" value="1" name="apprentissage" class="btn btn-outline-danger w100">A Revoir</button>
        <button type="submit" value="2" name="apprentissage" class="btn btn-outline-warning w100">Difficile</button>
        <button type="submit" value="3" name="apprentissage" class="btn btn-outline-primary w100">Bien</button>
        <button type="submit" value="4" name="apprentissage" class="btn btn-outline-success w100">Parfait</button>
        <input type="hidden" name="idCarte" value="<?=$unecarte["idCarte"];?>">
        <input type="hidden" name="sensRevision" value="<?=$sensRevision;?>">
    </form>
</div>