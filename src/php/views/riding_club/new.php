<?php
echo '
    <form id="riding_club" class="form" action="create.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="number" name="id_etablishment" placeholder="N° etablissement">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';