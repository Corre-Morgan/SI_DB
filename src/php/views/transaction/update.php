<?php
require_once '../../controllers/transaction.php';
$id = $_GET["id"];
TransactionController::update($id);
header("Location: ../../accueil.php");