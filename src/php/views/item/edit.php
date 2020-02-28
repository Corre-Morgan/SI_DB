<?php
require_once "../../controllers/item.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
ItemController::load_item($_GET["id"]);
$data = $_SESSION["item"];
echo '
    <form id="edit_item" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["id_facility"].'" type="number" name="id_facility" placeholder="N° Facility">
        </div>
        <div class="ui input error">
            <input value="'.$data["id_horse"].'" type="number" name="id_horse" placeholder="N° cheval">
        </div>
        <div class="ui input error">
            <input value="'.$data["type"].'" type="text" name="type" placeholder="Type">
        </div>
        <div class="ui input error">
            <input value="'.$data["lvl"].'" type="number" name="lvl" placeholder="Niveau">
        </div>
        <div class="ui input error">
            <input value="'.$data["description"].'" type="text" name="description" placeholder="Description">
        </div>
        <div class="ui input error">
            <input value="'.$data["item_family"].'" type="text" name="item_family" placeholder="Famille">
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