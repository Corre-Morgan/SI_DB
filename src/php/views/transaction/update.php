<?php
require_once '../../controllers/transaction.php';
$id = $_GET["id"];
TransactionController::update($_POST,$id);
header("Location: ../../accueil.php");