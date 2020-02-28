<?php
require_once '../../controllers/transaction.php';
$id = $_GET["id"];
TransactionController::delete($id);
header("Location: ../../accueil.php");