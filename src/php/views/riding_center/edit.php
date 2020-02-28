<?php
echo '
    <form id="edit_riding_center" class="form" action="edit.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="number" name="id_etablishment" placeholder="N° etablissement">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';