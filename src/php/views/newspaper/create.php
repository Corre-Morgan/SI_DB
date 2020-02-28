<?php
require_once '../../controllers/newspaper.php';
NewspaperController::create($_POST);
header("Location: ../../accueil.php");