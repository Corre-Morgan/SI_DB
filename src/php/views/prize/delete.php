<?php
require_once '../../controllers/prize.php';
$id = $_GET["id"];
PrizeController::delete($id);
header("Location: ../../accueil.php");