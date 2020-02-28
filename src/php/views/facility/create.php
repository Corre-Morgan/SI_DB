<?php
require_once '../../controllers/facility.php';
FacilityController::create($_POST);
header("Location: ../../accueil.php");