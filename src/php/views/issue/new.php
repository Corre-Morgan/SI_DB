<?php
include_once '../../header.php';
echo '
    <form id="issue" class="form" action="create.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="text" name="type" placeholder="Type">
        </div>
        <div class="ui input error">
            <input type="text" name="description" placeholder="Description">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';