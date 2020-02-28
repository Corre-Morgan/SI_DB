<?php
require_once "../../controllers/newspaper.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
NewspaperController::load_newspaper($_GET["id"]);
$data = $_SESSION["newspaper"];
echo '
    <form id="edit_newspaper" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["id_log"].'" type="number" name="id_log" placeholder="N° log">
        </div>
        <div class="ui input error">
            <input value="'.$data["weather"].'" type="text" name="weather" placeholder="Meteo">
        </div>
        <div class="ui input error">
            <input value="'.$data["pub"].'" type="text" name="pub" placeholder="Pub">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';