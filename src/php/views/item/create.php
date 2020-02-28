<?php
require_once '../../controllers/item.php';
ItemController::create($_POST);
header("Location: ../../accueil.php");