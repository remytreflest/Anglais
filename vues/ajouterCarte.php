<?php
require_once "header.php";

$categories = sqlCategories();

if(!empty($_GET["success"])){
    ?>
    <div class="alert alert-success mt-3">La carte a été ajouté avec succes !</div>
    <?php
}

if(!empty($_GET["erreur"])){
    ?>
    <div class="alert alert-warning mt-3">Un problème est survenu et la carte n'a pas pu être ajouté :/</div>
    <?php
}

?>

<div class="row col-6 offset-3 my-5">

    <form method="POST" action="../traitements/ajouterCarte.php">

    <div class="my-3">
        <label for="anglais" class="form-label">Le contenu de la carte en <b>ANGLAIS</b> :</label>
        <div class="england">
            <textarea name="anglais" id="anglais" class="form-control" rows="3"></textarea>
        </div>
    </div>

    <div class="my-3">
        <label for="anglaisDescription" class="form-label">Contexte facultatif de la carte en <b>ANGLAIS</b> :</label>
        <div class="england">
            <textarea name="anglaisDescription" id="anglaisDescription" class="form-control" rows="3"></textarea>
        </div>
    </div>

    <div class="my-3">
        <label for="francais" class="form-label">Le contenu de la carte en <b>FRANCAIS</b> :</label>
        <div class="french">
            <textarea name="francais" id="francais" class="form-control" rows="3"></textarea>
        </div>
    </div>

    <div class="my-3">
        <label for="francaisDescription" class="form-label">Contexte facultatif de la carte en <b>FRANCAIS</b> :</label>
        <div class="french">
            <textarea name="francaisDescription" id="francaisDescription" class="form-control" rows="3"></textarea>
        </div>
    </div>

    <div class="my-3">
            <label for="categorie" class="form-label">Choisissez la catégorie de la carte :</label>
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

    </form>

    <div class="input-group d-flex justify-content-center mt-3">
        <input type="submit" class="btn btn-outline-success">
    </div>

</div>

<?php
require_once "footer.php";
?>