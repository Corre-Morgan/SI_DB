<?php
require_once "../../controllers/facility.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
UserController::load_facilities();
echo '
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>N° etablissement</th>
                <th>Type</th>
                <th>Niveau</th>
                <th>Description</th>
                <th>Famille</th>
                <th>Prix</th>
                <th>Consommation</th>
                <th>Stockage objetx</th>
                <th>Stockage chevaux</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['facilities'] as $facility){
                    echo '<tr>';
                    foreach ($facility as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';
