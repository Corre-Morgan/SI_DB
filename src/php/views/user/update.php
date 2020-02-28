<?php
require_once '../../controllers/user.php';
$id = $_GET["id"];
UserController::update($_POST,$id);
header("Location: ../../accueil.php");
