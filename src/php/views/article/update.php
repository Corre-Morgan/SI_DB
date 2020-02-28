<?php
require_once '../../controllers/article.php';
$id = $_GET["id"];
ArticleController::update($id);
header("Location: ../../accueil.php");