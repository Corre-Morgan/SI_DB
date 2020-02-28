<?php
require_once "../../controllers/facility.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
FacilityController::load_facility($_GET["id"]);
$data = $_SESSION["facility"];
echo '
    <form id="edit_facility" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["id_etablishment"].'" type="number" name="id_etablishment" placeholder="N° etablissement">
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
            <input value="'.$data["family"].'" type="text" name="family" placeholder="Famille">
        </div>
        <div class="ui input error">
            <input value="'.$data["price"].'" type="number" name="price" placeholder="Prix">
        </div>
        <div class="ui input error">
            <input value="'.$data["ressource_consumption"].'" type="number" name="ressource_consumption" placeholder="Consommation">
        </div>
        <div class="ui input error">
            <input value="'.$data["item_capacity"].'" type="number" name="item_capacity" placeholder="Capacité stockage item">
        </div>
        <div class="ui input error">
            <input value="'.$data["horse_capacity"].'" type="number" name="horse_capacity" placeholder="Capacité stockage chevaux>
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';