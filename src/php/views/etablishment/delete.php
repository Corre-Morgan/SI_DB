<?php
require_once '../../controllers/etablishment.php';
$id = $_GET["id"];
EtablishmentController::delete($id);
header("Location: ../../accueil.php");