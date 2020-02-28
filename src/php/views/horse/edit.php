<?php
require_once "../../controllers/horse.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
HorseController::load_horse($_GET["id"]);
$data = $_SESSION["horse"];
echo '
    <form id="edit_horse" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["id_user"].'" type="number" name="id_user" placeholder="N° user">
        </div>
        <div class="ui input error">
            <input value="'.$data["id_riding_center"].'" type="number" name="id_riding_center" placeholder="N° centre equestre">
        </div>
        <div class="ui input error">
            <input value="'.$data["name"].'" type="text" name="name" placeholder="Nom">
        </div>
        <div class="ui input error">
            <input value="'.$data["breed"].'" type="text" name="breed" placeholder="Breed">
        </div>
        <div class="ui input error">
            <input value="'.$data["lvl"].'" type="number" name="lvl" placeholder="Niveau">
        </div>
        <div class="ui input error">
            <input value="'.$data["exp"].'" type="number" name="exp" placeholder="Experience">
        </div>
        <div class="ui input error">
            <input value="'.$data["overall_condition"].'" type="number" name="overall_condition" placeholder="Etat de santé général">
        </div>
        <div class="ui input error">
            <input value="'.$data["health"].'" type="number" name="health" placeholder="Santé">
        </div>
        <div class="ui input error">
            <input value="'.$data["moral"].'" type="number" name="moral" placeholder="Moral">
        </div>
        <div class="ui input error">
            <input value="'.$data["stress"].'" type="number" name="stress" placeholder="Stress">
        </div>
        <div class="ui input error">
            <input value="'.$data["tiredness"].'" type="number" name="tiredness" placeholder="Fatigue">
        </div>
        <div class="ui input error">
            <input value="'.$data["hunger"].'" type="number" name="hunger" placeholder="Satieté">
        </div>
        <div class="ui input error">
            <input value="'.$data["hygiene"].'" type="number" name="hygiene" placeholder="Hygiene">
        </div>
        <div class="ui input error">
            <input value="'.$data["resistance"].'" type="number" name="resistance" placeholder="Resistance">
        </div>
        <div class="ui input error">
            <input value="'.$data["stamina"].'" type="number" name="stamina" placeholder="Endurance">
        </div>
        <div class="ui input error">
            <input value="'.$data["jump"].'" type="number" name="jump" placeholder="Saut">
        </div>
        <div class="ui input error">
            <input value="'.$data["speed"].'" type="number" name="speed" placeholder="Vitesse">
        </div>
        <div class="ui input error">
            <input value="'.$data["social"].'" type="number" name="social" placeholder="Social">
        </div>
        <div class="ui input error">
            <input value="'.$data["intelligence"].'" type="number" name="intelligence" placeholder="Intel">
        </div>
        <div class="ui input error">
            <input value="'.$data["temper"].'" type="number" name="temper" placeholder="Tempérament">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';