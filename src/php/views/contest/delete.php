<?php
require_once '../../controllers/contest.php';
$id = $_GET["id"];
ContestController::delete($id);
header("Location: ../../accueil.php");