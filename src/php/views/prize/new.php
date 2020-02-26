<?php
echo '
    <form id="prize" class="form" action="create.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="number" name="id_contest" placeholder="N° concours">
        </div>
        <div class="ui input error">
            <input type="number" name="id_item" placeholder="N° objet">
        </div>
        <div class="ui input error">
            <input type="number" name="rank" placeholder="Rang">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';