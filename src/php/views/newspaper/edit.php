<?php
echo '
    <form id="edit_newspaper" class="form" action="edit.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="number" name="id_log" placeholder="N° log">
        </div>
        <div class="ui input error">
            <input type="text" name="weather" placeholder="Meteo">
        </div>
        <div class="ui input error">
            <input type="text" name="pub" placeholder="Pub">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';