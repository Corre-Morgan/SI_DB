<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);
require_once '../../controllers/user.php';
$_POST['avatar'] = $_FILES['avatar']['name'];
UserController::create($_POST);
header("Location: ../../accueil.php");