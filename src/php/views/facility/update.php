<?php
require_once '../../controllers/facility.php';
$id = $_GET["id"];
FacilityController::update($id);
header("Location: ../../accueil.php");