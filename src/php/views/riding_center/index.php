<?php
require_once "../../controllers/riding_center.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
RidingCenterController::load_riding_centers($_GET["number"]);
echo '
    <table>
        <thead>
            <tr>
                <th>N° etablissement</th>
            </tr>
        </thead>
        <tbody';
                foreach ($_SESSION['riding_center'] as $rc){
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
if ($_GET["number"] > 20) {
  echo '<a href="index.php?number='.$numbermoins.'">Page précédente</a>';
}
echo '<a href="index.php?number='.$numberplus.'">Page suivante</a>';
