<?php
require_once '../../controllers/item.php';
$id = $_GET["id"];
ItemController::update($id);
header("Location: ../../accueil.php");