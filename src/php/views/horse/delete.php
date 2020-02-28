<?php
require_once '../../controllers/horse.php';
$id = $_GET["id"];
HorseController::delete($id);
header("Location: ../../accueil.php");