<?php
require_once "../../controllers/log.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
UserController::load_logs();
echo '
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>N° utilisateur</th>
                <th>Date</th>
                <th>Description</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['logs'] as $log){
                    echo '<tr>';
                    foreach ($log as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';