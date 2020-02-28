<?php
require_once "../../controllers/prize.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
PrizeController::load_prize($_GET["id"]);
$data = $_SESSION["prize"];
echo '
    <form id="edit_prize" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["id_contest"].'" type="number" name="id_contest" placeholder="N° concours">
        </div>
        <div class="ui input error">
            <input value="'.$data["id_item"].'" type="number" name="id_item" placeholder="N° objet">
        </div>
        <div class="ui input error">
            <input value="'.$data["rank"].'" type="number" name="rank" placeholder="Rang">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';