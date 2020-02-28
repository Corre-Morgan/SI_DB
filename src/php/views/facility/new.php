<?php
echo '
    <form id="facility" class="form" action="create.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="number" name="id_etablishment" placeholder="N° etablissement">
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
            <input type="text" name="family" placeholder="Famille">
        </div>
        <div class="ui input error">
            <input type="number" name="price" placeholder="Prix">
        </div>
        <div class="ui input error">
            <input type="number" name="ressource_consumption" placeholder="Consommation">
        </div>
        <div class="ui input error">
            <input type="number" name="item_capacity" placeholder="Capacité stockage item">
        </div>
        <div class="ui input error">
            <input type="number" name="horse_capacity" placeholder="Capacité stockage chevaux>
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';