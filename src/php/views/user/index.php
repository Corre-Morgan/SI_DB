<?php
require_once "../../controllers/user.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
UserController::load_users();

echo '
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Pseudo</th>
                <th>Mail</th>
                <th>Mot de passe</th>
                <th>Sexe</th>
                <th>Telephone</th>
                <th>Pays</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Date de naissance</th>
                <th>Adresse</th>
                <th>Avatar</th>
                <th>Description</th>
                <th>Website</th>
                <th>Adresse ip</th>
                <th>Date inscription</th>
                <th>Date derniere connexion</th>
                <th>Argent</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['users'] as $user){
                    echo '<tr>';
                    foreach ($user as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '</tr>';
                }
  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';