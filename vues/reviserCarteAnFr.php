<?php
require_once "header.php";

$sensRevision = "AN-FR";
$cartes = sqlCarteAn();

require_once "carteAnFr.php";

?>



<script src="../js/script.js"></script>

<?php
require_once "footer.php";
?>