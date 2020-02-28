<?php
require_once "../../controllers/issue.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
IssueController::load_issue($_GET["id"]);
$data = $_SESSION["issue"];
echo '
    <form id="edit_issue" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["type"].'" type="text" name="type" placeholder="Type">
        </div>
        <div class="ui input error">
            <input value="'.$data["description"].'" type="text" name="description" placeholder="Description">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';