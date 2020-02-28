<?php
include_once '../../header.php';
echo '
    <form id="newspaper_article" class="form" action="create.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="number" name="id_newspaper" placeholder="N° journal">
        </div>
        <div class="ui input error">
            <input type="number" name="id_article" placeholder="N° article">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';