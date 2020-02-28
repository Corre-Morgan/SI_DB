<?php
require_once "../../controllers/newspaper.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
NewspaperController::load_newspapers();
echo '
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>N° log</th>
                <th>Meteo</th>
                <th>Pub</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['newspaper'] as $news){
                    echo '<tr>';
                    foreach ($news as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '<td><a href="edit.php?id='.$news["id"].'">Modif</a></td>';
                    echo '<td><a href="delete.php?id='.$news["id"].'">Suppr</a></td>';
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';