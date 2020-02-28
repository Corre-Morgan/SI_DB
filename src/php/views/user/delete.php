<?php
require_once '../../controllers/user.php';
$id = $_GET["id"];
UserController::delete($id);
header("Location: ../../accueil.php");