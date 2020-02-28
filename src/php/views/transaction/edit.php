<?php
require_once "../../controllers/transaction.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
TransactionController::load_transaction($_GET["id"]);
$data = $_SESSION["transaction"];
echo '
    <form id="edit_transaction" class="form" action="update.php?id='.$_GET["id"].'" method="post" enctype="multipart/form-data">
        <div class="ui input error">
            <input value="'.$data["id_user"].'" type="text" name="id_user" placeholder="identifiant utilisateur">
        </div>
        <div class="ui input error">
            <input value="'.$data["amount"].'" type="number" name="amount" placeholder="Somme">
        </div>
        <div class="ui input error">
            <input value="'.$data["date"].'" type="date" name="date" placeholder="Date de la transaction">
        </div>
        <button class="ui primary button">
            <input type="submit" name="submit" value="Créer">
        </button>
        
        <a href="../../accueil.php">Retour</a>
    </form>
';