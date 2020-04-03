<?php
require_once "../../controllers/contest.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
ContestController::load_contests($_GET["number"]);
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
                    echo '<td><a href="edit.php?id='.$contest["id"].'">Modif</a></td>';
                    echo '<td><a href="delete.php?id='.$contest["id"].'">Suppr</a></td>';
                    echo '</tr>';
                }

  echo' </tbody>
    </table>

    <a href="new.php">Nouveau</a>
';
if ($_GET["number"] > 20) {
  echo '<a href="index.php?number='.$numbermoins.'">Page précédente</a>';
}
echo '<a href="index.php?number='.$numberplus.'">Page suivante</a>';
