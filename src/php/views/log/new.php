<?php
include_once '../../header.php';
echo '
    <form id="log" class="form" action="create.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="number" name="id_user" placeholder="N° user">
        </div>
        <div class="ui input error">
            <input type="date" name="date" placeholder="Date">
        </div>
        <div class="ui input error">
            <input type="text" name="description" placeholder="Description">
        </div>
        <div class="ui input error">
            <input type="number" name="value" placeholder="Valeur">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';