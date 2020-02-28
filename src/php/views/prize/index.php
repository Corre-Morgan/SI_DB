<?php
require_once "../../controllers/prize.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
UserController::load_prizes();
echo '
    <table>
        <thead>
            <tr>
                <th>N° concours</th>
                <th>N° objer</th>
                <th>Rang</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['prizes'] as $prize){
                    echo '<tr>';
                    foreach ($prize as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';