<?php
require_once '../../controllers/article.php';
$id = $_GET["id"];
ArticleController::delete($id);
header("Location: ../../accueil.php");