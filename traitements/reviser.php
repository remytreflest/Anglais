<?php
require_once "../traitements/traitement.php";

$sensRevision = $_POST["sensRevision"];
$RevisionAnFr = "AN-FR";
$revisionFrAn = "FR-AN";

if(!empty($_POST["apprentissage"]) && $sensRevision === $RevisionAnFr){

    sqlCarteStatutAn($_POST["apprentissage"], $_POST["idCarte"]);

}

if(!empty($_POST["apprentissage"]) && $sensRevision === $revisionFrAn){

    sqlCarteStatutFr($_POST["apprentissage"], $_POST["idCarte"]);

}

?>