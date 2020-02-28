<?php
require_once '../../controllers/horse.php';
HorseController::create($_POST);
header("Location: ../../accueil.php");