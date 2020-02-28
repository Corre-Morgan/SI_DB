<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);
require_once '../../controllers/transaction.php';
TransactionController::create($_POST);
header("Location: ../../accueil.php");