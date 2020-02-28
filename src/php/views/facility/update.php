<?php
require_once '../../controllers/facility.php';
include_once '../../header.php';
$id = $_GET["id"];
FacilityController::update($_POST,$id);
header("Location: ../../accueil.php");