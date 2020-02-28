<?php
require_once '../../controllers/task.php';
$id = $_GET["id"];
TaskController::delete($id);
header("Location: ../../accueil.php");