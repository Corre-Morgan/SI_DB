<?php
require_once '../../controllers/user.php';
UserController::create($_POST);
header("Location: ../../accueil.php");