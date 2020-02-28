<?php
require_once "../../controllers/riding_club.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
RidingClubController::load_riding_clubs();
echo '
    <table>
        <thead>
            <tr>
                <th>N° etablissement</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['riding_club'] as $rc){
                    echo '<tr>';
                    foreach ($rc as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';