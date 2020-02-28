<?php
require_once '../../controllers/etablishment.php';
include_once '../../header.php';
$id = $_GET["id"];
EtablishmentController::update($_POST,$id);
header("Location: ../../accueil.php");