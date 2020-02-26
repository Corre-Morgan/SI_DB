<?php
echo '
    <form id="item" class="form" action="create.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="number" name="id_facility" placeholder="N° Facility">
        </div>
        <div class="ui input error">
            <input type="number" name="id_horse" placeholder="N° cheval">
        </div>
        <div class="ui input error">
            <input type="text" name="type" placeholder="Type">
        </div>
        <div class="ui input error">
            <input type="number" name="lvl" placeholder="Niveau">
        </div>
        <div class="ui input error">
            <input type="text" name="description" placeholder="Description">
        </div>
        <div class="ui input error">
            <input type="text" name="item_family" placeholder="Famille">
        </div>
        <div class="ui input error">
            <input type="number" name="price" placeholder="Prix">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';