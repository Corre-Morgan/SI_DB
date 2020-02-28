<?php
include_once '../../header.php';
echo '
    <form id="horse" class="form" action="create.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="number" name="id_user" placeholder="N° user">
        </div>
        <div class="ui input error">
            <input type="number" name="id_riding_center" placeholder="N° centre equestre">
        </div>
        <div class="ui input error">
            <input type="text" name="name" placeholder="Nom">
        </div>
        <div class="ui input error">
            <input type="text" name="breed" placeholder="Breed">
        </div>
        <div class="ui input error">
            <input type="number" name="lvl" placeholder="Niveau">
        </div>
        <div class="ui input error">
            <input type="number" name="exp" placeholder="Experience">
        </div>
        <div class="ui input error">
            <input type="number" name="overall_condition" placeholder="Etat de santé général">
        </div>
        <div class="ui input error">
            <input type="number" name="health" placeholder="Santé">
        </div>
        <div class="ui input error">
            <input type="number" name="moral" placeholder="Moral">
        </div>
        <div class="ui input error">
            <input type="number" name="stress" placeholder="Stress">
        </div>
        <div class="ui input error">
            <input type="number" name="tiredness" placeholder="Fatigue">
        </div>
        <div class="ui input error">
            <input type="number" name="hunger" placeholder="Satieté">
        </div>
        <div class="ui input error">
            <input type="number" name="hygiene" placeholder="Hygiene">
        </div>
        <div class="ui input error">
            <input type="number" name="resistance" placeholder="Resistance">
        </div>
        <div class="ui input error">
            <input type="number" name="stamina" placeholder="Endurance">
        </div>
        <div class="ui input error">
            <input type="number" name="jump" placeholder="Saut">
        </div>
        <div class="ui input error">
            <input type="number" name="speed" placeholder="Vitesse">
        </div>
        <div class="ui input error">
            <input type="number" name="social" placeholder="Social">
        </div>
        <div class="ui input error">
            <input type="number" name="intelligence" placeholder="Intel">
        </div>
        <div class="ui input error">
            <input type="number" name="temper" placeholder="Tempérament">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';