<?php
include_once '../../header.php';
echo '
    <form id="contest" class="form" action="create.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="number" name="id_etablishment" placeholder="N° etablissement">
        </div>
        <div class="ui input error">
            <input type="number" name="id_facility" placeholder="N° facility">
        </div>
        <div class="ui input error">
            <input type="date" name="begin_date" placeholder="Date début">
        </div>
        <div class="ui input error">
            <input type="date" name="end_date" placeholder="Date fin">
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