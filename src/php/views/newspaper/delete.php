<?php
require_once '../../controllers/newspaper.php';
$id = $_GET["id"];
NewspaperController::delete($id);
header("Location: ../../accueil.php");