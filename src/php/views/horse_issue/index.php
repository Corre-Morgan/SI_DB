<?php
require_once "../../controllers/horse_issue.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
UserController::load_users();
echo '
    <table>
        <thead>
            <tr>
                <th>N° cheval</th>
                <th>N° issue</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['horse_issues'] as $hi){
                    echo '<tr>';
                    foreach ($hi as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';