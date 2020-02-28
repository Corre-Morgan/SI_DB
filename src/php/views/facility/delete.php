<?php
require_once '../../controllers/facility.php';
$id = $_GET["id"];
FacilityController::delete($id);
header("Location: ../../accueil.php");