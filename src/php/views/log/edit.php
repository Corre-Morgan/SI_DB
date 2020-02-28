<?php
require_once "../../controllers/log.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
LogController::load_log($_GET["id"]);
$data = $_SESSION["log"];
echo '
    <form id="edit_log" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["id_user"].'" type="number" name="id_user" placeholder="N° user">
        </div>
        <div class="ui input error">
            <input value="'.$data["date"].'" type="date" name="date" placeholder="Date">
        </div>
        <div class="ui input error">
            <input value="'.$data["description"].'" type="text" name="description" placeholder="Description">
        </div>
        <div class="ui input error">
            <input value="'.$data["value"].'" type="number" name="value" placeholder="Valeur">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';