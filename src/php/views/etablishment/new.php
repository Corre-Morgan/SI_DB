<?php
include_once '../../header.php';
echo '
    <form id="etablishment" class="form" action="create.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="number" name="id_user" placeholder="N° user">
        </div>
        <div class="ui input error">
            <input type="number" name="capacity" placeholder="Capacité">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';