<?php
require_once "../../controllers/contest.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
ContestController::load_contest($_GET["id"]);
$data = $_SESSION["contest"];
echo '
    <form id="edit_contest" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["id_etablishment"].'" type="number" name="id_etablishment" placeholder="N° etablissement">
        </div>
        <div class="ui input error">
            <input value="'.$data["id_facility"].'" type="number" name="id_facility" placeholder="N° facility">
        </div>
        <div class="ui input error">
            <input value="'.$data["begin_date"].'" type="date" name="begin_date" placeholder="Date début">
        </div>
        <div class="ui input error">
            <input value="'.$data["end_date"].'" type="date" name="end_date" placeholder="Date fin">
        </div>
        <div class="ui input error">
            <input value="'.$data["price"].'" type="number" name="price" placeholder="Prix">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';