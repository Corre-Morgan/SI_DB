<?php
require_once '../../controllers/newspaper.php';
$id = $_GET["id"];
NewspaperController::update($id);
header("Location: ../../accueil.php");