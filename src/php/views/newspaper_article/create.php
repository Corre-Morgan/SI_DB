<?php
require_once '../../controllers/newspaper_article.php';
NewspaperArticleController::create($_POST);
header("Location: ../../accueil.php");