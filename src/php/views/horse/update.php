<?php
require_once '../../controllers/horse.php';
include_once '../../header.php';
$id = $_GET["id"];
HorseController::update($_POST,$id);
header("Location: ../../accueil.php");