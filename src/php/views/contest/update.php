<?php
require_once '../../controllers/contest.php';
include_once '../../header.php';
$id = $_GET["id"];
ContestController::update($_POST,$id);
header("Location: ../../accueil.php");