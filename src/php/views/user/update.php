<?php
require_once '../../controllers/user.php';
$id = $_GET["id"];
UserController::update($id);
header("Location: ../../accueil.php");
