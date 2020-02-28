<?php
require_once '../../controllers/newspaper.php';
include_once '../../header.php';
$id = $_GET["id"];
NewspaperController::update($_POST,$id);
header("Location: ../../accueil.php");