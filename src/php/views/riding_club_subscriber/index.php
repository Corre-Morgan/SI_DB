<?php
require_once "../../controllers/riding_club_subscriber.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
RidingClubSubscriberController::load_riding_club_subscribers($_GET["number"]);
echo '
    <table>
        <thead>
            <tr>
                <th>N° club hyppique</th>
                <th>N° user</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['riding_club_subscribers'] as $rcs){
                    echo '<tr>';
                    foreach ($rcs as $data){
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
