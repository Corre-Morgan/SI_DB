<?php
require_once "../../controllers/etablishment.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
EtablishmentController::load_etablishment($_GET["id"]);
$data = $_SESSION["etablishment"];

echo '
    <form id="edit_etablishment" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["id_user"].'" type="number" name="id_user" placeholder="N° user">
        </div>
        <div class="ui input error">
            <input value="'.$data["capacity"].'" type="number" name="capacity" placeholder="Capacité">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';