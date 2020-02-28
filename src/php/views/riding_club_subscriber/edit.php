<?php
echo '
    <form id="edit_riding_club_subscriber" class="form" action="edit.php" method="post" enctype="multipart/form-data">
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