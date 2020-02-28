<?php
require_once '../../controllers/article.php';
ArticleController::create($_POST);
header("Location: ../../accueil.php");
