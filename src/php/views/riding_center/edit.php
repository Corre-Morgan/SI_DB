<?php
require_once "../../controllers/riding_center.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
RidingCenterController::load_riding_center($_GET["id"]);
$data = $_SESSION["riding_center"];
echo '
    <form id="edit_riding_center" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["id_etablishment"].'" type="number" name="id_etablishment" placeholder="N° etablissement">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';