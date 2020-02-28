<?php
require_once "../../controllers/user.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
UserController::load_user($_GET["id"]);
$data = $_SESSION['user'];
echo '
    <form id="edit_user" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["username"].'" type="text" name="username" placeholder="pseudo">
        </div>
        <div class="ui input error">
            <input value="'.$data["last_name"].'" type="text" name="last_name" placeholder="Nom">
        </div>
        <div class="ui input error">
            <input value="'.$data["first_name"].'" type="text" name="first_name" placeholder="Prénom">
        </div>
        <div class="ui input error">
            <input value="'.$data["email"].'" type="email" name="email" placeholder="email">
        </div>
        <div class="ui input error">
            <input value="'.$data["password"].'" type="password" name="password" placeholder="Mot de passe">
        </div>
        <div class="ui input error">
            <input  value="'.$data["gender"].'"type="text" name="gender" placeholder="sexe">
        </div>
        <div class="ui input error">
            <input value="'.$data["phone"].'" type="tel" name="phone" placeholder="Téléphone">
        </div>
        <div class="ui input error">
            <input value="'.$data["country"].'" type="text" name="country" placeholder="pays">
        </div>
        <div class="ui input error">
            <input value="'.$data["birth_date"].'" type="date" name="birth_date" placeholder="date de naissance">
        </div>
        <div class="ui input error">
            <input value="'.$data["address"].'" type="text" name="address" placeholder="Adresse">
        </div>
        <div class="ui input error">
            <input value="'.$data["description"].'" type="text" name="description" placeholder="Description">
        </div>
        <div class="ui input error">
            <input value="'.$data["website"].'" type="text" name="website" placeholder="Site internet">
        </div>
        <div class="ui input error">
            <input value="'.$data["avatar"].'" type="file" name="avatar" placeholder="avatar">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';