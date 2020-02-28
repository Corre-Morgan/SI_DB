<?php
require_once '../../controllers/etablishment.php';
EtablishmentController::create($_POST);
header("Location: ../../accueil.php");