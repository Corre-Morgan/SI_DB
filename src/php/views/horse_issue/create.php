<?php
require_once '../../controllers/horse_issue.php';
HorseIssueController::create($_POST);
header("Location: ../../accueil.php");