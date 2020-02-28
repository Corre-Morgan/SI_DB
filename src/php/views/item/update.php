<?php
require_once '../../controllers/item.php';
include_once '../../header.php';
$id = $_GET["id"];
ItemController::update($_POST,$id);
header("Location: ../../accueil.php");