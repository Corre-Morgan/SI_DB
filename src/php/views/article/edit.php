<?php



echo '
    <form id="edit_article" class="form" action="update.php.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="text" name="title" placeholder="Titre">
        </div>
        <div class="ui input error">
            <input type="text" name="description" placeholder="Description">
        </div>
        <div class="ui input error">
            <input type="file" name="img" placeholder="Image">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';