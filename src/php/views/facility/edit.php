<?php
echo '
    <form id="user" class="form" action="create.php" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input type="text" name="username" placeholder="pseudo">
        </div>
        <div class="ui input error">
            <input type="text" name="last_name" placeholder="Nom">
        </div>
        <div class="ui input error">
            <input type="text" name="first_name" placeholder="Prénom">
        </div>
        <div class="ui input error">
            <input type="email" name="email" placeholder="email">
        </div>
        <div class="ui input error">
            <input type="password" name="password" placeholder="Mot de passe">
        </div>
        <div class="ui input error">
            <input type="text" name="gender" placeholder="sexe">
        </div>
        <div class="ui input error">
            <input type="tel" name="phone" placeholder="Téléphone">
        </div>
        <div class="ui input error">
            <input type="text" name="country" placeholder="pays">
        </div>
        <div class="ui input error">
            <input type="date" name="birthdate" placeholder="date de naissance">
        </div>
        <div class="ui input error">
            <input type="text" name="address" placeholder="Adresse">
        </div>
        <div class="ui input error">
            <input type="text" name="description" placeholder="Description">
        </div>
        <div class="ui input error">
            <input type="text" name="website" placeholder="Site internet">
        </div>
        <div class="ui input error">
            <input type="file" name="avatar" placeholder="avatar">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
    </form>
';