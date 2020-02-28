<?php
require_once '../../controllers/task.php';
TaskController::create($_POST);
header("Location: ../../accueil.php");