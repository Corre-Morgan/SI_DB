<?php
require_once "../../controllers/contest.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
UserController::load_users();
echo '
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>N° etablissement</th>
                <th>N° Facility</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Prix</th>     
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['contests'] as $contest){
                    echo '<tr>';
                    foreach ($contest as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';