<?php
require_once '../../controllers/log.php';
$id = $_GET["id"];
LogController::update($id);
header("Location: ../../accueil.php");