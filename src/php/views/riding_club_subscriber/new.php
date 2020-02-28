<?php
include_once '../../header.php';
echo '
    <form id="riding_club_subscriber" class="form" action="create.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="number" name="id_riding_club" placeholder="N° club hippique">
        </div>
        <div class="ui input error">
            <input type="number" name="id_user" placeholder="N° user">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';