<?php
require_once '../../controllers/item.php';
$id = $_GET["id"];
ItemController::delete($id);
header("Location: ../../accueil.php");