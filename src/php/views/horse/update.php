<?php
require_once '../../controllers/horse.php';
$id = $_GET["id"];
HorseController::update($id);
header("Location: ../../accueil.php");