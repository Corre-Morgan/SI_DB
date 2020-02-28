<?php
echo '
    <form id="edit_transaction" class="form" action="edit.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="text" name="id_user" placeholder="identifiant utilisateur">
        </div>
        <div class="ui input error">
            <input type="number" name="amount" placeholder="Somme">
        </div>
        <div class="ui input error">
            <input type="date" name="date" placeholder="Date de la transaction">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';