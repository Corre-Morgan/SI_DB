<?php
require_once "../../controllers/article.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
ArticleController::load_article($_GET["id"]);
$data =$_SESSION["article"];
echo '
    <form id="edit_article" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["title"].'" type="text" name="title" placeholder="Titre">
        </div>
        <div class="ui input error">
            <input value="'.$data["description"].'" type="text" name="description" placeholder="Description">
        </div>
        <div class="ui input error">
            <input value="'.$data["img"].'" type="file" name="img" placeholder="Image">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';