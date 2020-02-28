<?php
require_once "../../controllers/horse_issue.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
HorseIssueController::load_horse_issue($_GET["id"]);
$data = $_SESSION["horse_issue"];
echo '
    <form id="edit_horse_issue" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["id_horse"].'" type="number" name="id_horse" placeholder="N° cheval">
        </div>
        <div class="ui input error">
            <input value="'.$data["id_issue"].'" type="number" name="id_issue" placeholder="N° issue">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';