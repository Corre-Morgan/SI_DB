<?php
require_once "../../controllers/transaction.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
UserController::load_transactions();
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
                    echo '</tr>';
                }
  echo' </tbody>
    </table>  
    <a href="new.php">Nouveau</a>
';