<?php
require_once '../../controllers/log.php';
$id = $_GET["id"];
LogController::delete($id);
header("Location: ../../accueil.php");