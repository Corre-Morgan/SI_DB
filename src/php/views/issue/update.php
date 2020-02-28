<?php
require_once '../../controllers/issue.php';
include_once '../../header.php';
$id = $_GET["id"];
IssueController::update($_POST,$id);
header("Location: ../../accueil.php");