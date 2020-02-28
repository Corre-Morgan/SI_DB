<?php
require_once '../../controllers/log.php';
LogController::create($_POST);
header("Location: ../../accueil.php");