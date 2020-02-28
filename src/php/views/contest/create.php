<?php
require_once '../../controllers/contest.php';
ContestController::create($_POST);
header("Location: ../../accueil.php");