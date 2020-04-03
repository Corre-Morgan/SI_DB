<?php
require_once "../../controllers/horse.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
HorseController::load_horses($_GET["number"]);
echo '
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>N° utilisateur</th>
                <th>N° centre hyppique</th>
                <th>Nom</th>
                <th>Race</th>
                <th>Niveau</th>
                <th>Expérience</th>
                <th>Etat général</th>
                <th>Santé</th>
                <th>Moral</th>
                <th>Stress</th>
                <th>Fatigue</th>
                <th>Faim</th>
                <th>Hygiene</th>
                <th>Resistance</th>
                <th>Endurance</th>
                <th>Saut</th>
                <th>Vitesse</th>
                <th>Social</th>
                <th>Intel</th>
                <th>Tempérament</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['horses'] as $horse){
                    echo '<tr>';
                    foreach ($horse as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '<td><a href="edit.php?id='.$horse["id"].'">Modif</a></td>';
                    echo '<td><a href="delete.php?id='.$horse["id"].'">Suppr</a></td>';
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
