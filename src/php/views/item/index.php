<?php
require_once "../../controllers/item.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
ItemController::load_items($_GET["number"]);
echo '
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>N° facility</th>
                <th>N° cheval</th>
                <th>Type</th>
                <th>Niveau</th>
                <th>Description</th>
                <th>Famille</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['items'] as $item){
                    echo '<tr>';
                    foreach ($item as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '<td><a href="edit.php?id='.$item["id"].'">Modif</a></td>';
                    echo '<td><a href="delete.php?id='.$item["id"].'">Suppr</a></td>';
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
