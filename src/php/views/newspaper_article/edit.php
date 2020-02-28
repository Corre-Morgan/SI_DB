<?php
require_once "../../controllers/newspaper_article.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
NewspaperArticleController::load_newspaper_article($_GET["id"]);
$data = $_SESSION["newspaper_article"];
echo '
    <form id="edit_newspaper_article" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["id_newspaper"].'" type="number" name="id_newspaper" placeholder="N° journal">
        </div>
        <div class="ui input error">
            <input value="'.$data["id_article"].'" type="number" name="id_article" placeholder="N° article">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';