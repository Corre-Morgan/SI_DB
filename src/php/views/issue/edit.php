<?php
echo '
    <form id="edit_issue" class="form" action="edit.php" method="post" enctype="multipart/form-data">
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