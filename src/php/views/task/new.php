<?php
echo '
    <form id="task" class="form" action="create.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="number" name="id_etablishment" placeholder="Numéro d\'établissement">
        </div>
        <div class="ui input error">
            <input type="number" name="id_item" placeholder="Numéro de l\'objet">
        </div>
        <div class="ui input error">
            <input type="text" name="action" placeholder="Action">
        </div>
        <div class="ui input error">
            <input type="number" name="frequency" placeholder="Fréquence">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';