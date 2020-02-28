<?php
require_once '../../controllers/prize.php';
$id = $_GET["id"];
PrizeController::update($id);
header("Location: ../../accueil.php");