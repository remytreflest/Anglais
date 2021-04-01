<?php
require_once "header.php";

if(!empty($_GET["success"])){
    ?>
    <div class="alert alert-success mt-3">La catégorie a été ajouté avec succes !</div>
    <?php
}

if(!empty($_GET["erreur"])){
    ?>
    <div class="alert alert-warning mt-3">Un problème est survenu et la catégorie n'a pas pu être ajouté :/</div>
    <?php
}

?>

<div class="row col-6 offset-3 my-5">

    <form method="POST" action="../traitements/ajouterCategorie.php">

    <div class="my-3">
        <label for="newCategorie" class="form-label">Le nom de la catégorie à ajouter en <b>ANGLAIS</b> :</label>
        <div class="england">
            <textarea name="newCategorie" id="newCategorie" class="form-control" rows="3"></textarea>
        </div>
    </div>

    <div class="input-group d-flex justify-content-center mt-3">
        <input type="submit" class="btn btn-outline-success">
    </div>

</div>

<?php
require_once "footer.php";
?>