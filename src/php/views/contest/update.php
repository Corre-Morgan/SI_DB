<?php
require_once '../../controllers/contest.php';
$id = $_GET["id"];
ContestController::update($id);
header("Location: ../../accueil.php");