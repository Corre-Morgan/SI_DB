<?php
require_once "../../controllers/riding_club.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
RidingClubController::load_riding_club($_GET["id"]);
$data = $_SESSION["riding_club"];
echo '
    <form id="edit_riding_club" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["id_etablishment"].'" type="number" name="id_etablishment" placeholder="N° etablissement">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';