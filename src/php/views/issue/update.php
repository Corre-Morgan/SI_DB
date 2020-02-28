<?php
require_once '../../controllers/issue.php';
$id = $_GET["id"];
IssueController::update($id);
header("Location: ../../accueil.php");