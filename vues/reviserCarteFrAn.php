<?php
require_once "header.php";

$sensRevision = "FR-AN";
$cartes = sqlCarteFR();

require_once "carteFrAn.php";

?>



<script src="../js/script.js"></script>

<?php
require_once "footer.php";
?>