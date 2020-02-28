<?php
require_once '../../controllers/issue.php';
$id = $_GET["id"];
IssueController::delete($id);
header("Location: ../../accueil.php");