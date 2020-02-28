<?php
require_once '../../controllers/log.php';
include_once '../../header.php';
$id = $_GET["id"];
LogController::update($_POST,$id);
header("Location: ../../accueil.php");