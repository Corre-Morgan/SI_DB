<?php
require_once "../../controllers/etablishment.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
EtablishmentController::load_etablishments();
echo '
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Id utilisateur</th>
                <th>Capacité</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['etablishments'] as $etablishment){
                    echo '<tr>';
                    foreach ($etablishment as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '<td><a href="edit.php?id='.$etablishment["id"].'">Modif</a></td>';
                    echo '<td><a href="delete.php?id='.$etablishment["id"].'">Suppr</a></td>';
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';