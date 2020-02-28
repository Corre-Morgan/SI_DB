<?php
require_once '../../controllers/prize.php';
PrizeController::create($_POST);
header("Location: ../../accueil.php");