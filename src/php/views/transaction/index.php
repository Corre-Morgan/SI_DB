<?php
require_once "../../controllers/transaction.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
TransactionController::load_transactions($_GET["number"]);
echo '
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>N° utilisateur</th>
                <th>Montant</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['transactions'] as $transaction){
                    echo '<tr>';
                    foreach ($transaction as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '<td><a href="edit.php?id='.$transaction["id"].'">Modif</a></td>';
                    echo '<td><a href="delete.php?id='.$transaction["id"].'">Suppr</a></td>';
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
