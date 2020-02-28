<?php
require_once '../../controllers/issue.php';
IssueController::create($_POST);
header("Location: ../../accueil.php");