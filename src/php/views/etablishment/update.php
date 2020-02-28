<?php
require_once '../../controllers/etablishment.php';
$id = $_GET["id"];
EtablishmentController::update($id);
header("Location: ../../accueil.php");