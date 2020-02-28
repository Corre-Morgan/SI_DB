<?php
require_once '../../controllers/prize.php';
include_once '../../header.php';
$id = $_GET["id"];
PrizeController::update($_POST,$id);
header("Location: ../../accueil.php");