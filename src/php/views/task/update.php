<?php
require_once '../../controllers/task.php';
$id = $_GET["id"];
TaskController::update($id);
header("Location: ../../accueil.php");