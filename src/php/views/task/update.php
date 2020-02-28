<?php
require_once '../../controllers/task.php';
$id = $_GET["id"];
TaskController::update($_POST,$id);
header("Location: ../../accueil.php");