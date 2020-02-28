<?php
require_once "../../controllers/task.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
TaskController::load_task($_GET["id"]);
$data = $_SESSION["task"];

echo '
    <form id="edit_task" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["id_etablishment"].'" type="number" name="id_etablishment" placeholder="Numéro d\'établissement">
        </div>
        <div class="ui input error">
            <input value="'.$data["id_item"].'" type="number" name="id_item" placeholder="Numéro de l\'objet">
        </div>
        <div class="ui input error">
            <input value="'.$data["action"].'" type="text" name="action" placeholder="Action">
        </div>
        <div class="ui input error">
            <input value="'.$data["frequency"].'" type="number" name="frequency" placeholder="Fréquence">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';