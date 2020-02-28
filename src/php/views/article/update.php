<?php
require_once '../../controllers/article.php';
include_once '../../header.php';
$id = $_GET["id"];
ArticleController::update($_POST,$id);
header("Location: ../../accueil.php");