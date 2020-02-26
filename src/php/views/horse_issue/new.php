<?php
echo '
    <form id="horse_issue" class="form" action="create.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="number" name="id_horse" placeholder="N° cheval">
        </div>
        <div class="ui input error">
            <input type="number" name="id_issue" placeholder="N° issue">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';