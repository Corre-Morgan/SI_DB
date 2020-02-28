<?php
require_once "../../controllers/riding_club_subscriber.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
RidingClubSubscriberController::load_riding_club_subscriber($_GET["id"]);
$data = $_SESSION["riding_club_subscriber"];
echo '
    <form id="edit_riding_club_subscriber" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["id_riding_club"].'" type="number" name="id_riding_club" placeholder="N° club hippique">
        </div>
        <div class="ui input error">
            <input value="'.$data["id_user"].'" type="number" name="id_user" placeholder="N° user">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';