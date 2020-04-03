<?php
require_once "../../controllers/article.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
ArticleController::load_articles($_GET["number"]);
$numbermoins = $_GET["number"]-20;
$numberplus = $_GET["number"]+20;
echo '
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>titre</th>
                <th>description</th>
                <th>image</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['articles'] as $article){
                    echo '<tr>';
                    foreach ($article as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '<td><a href="edit.php?id='.$article["id"].'">Modif</a></td>';
                    echo '<td><a href="delete.php?id='.$article["id"].'">Suppr</a></td>';
                    echo '</tr>';
                }

  echo' </tbody>
    </table>

    <a href="new.php">Nouveau</a>
';

if ($_GET["number"] > 20) {
  echo '<a href="#?number='.$numbermoins.'">Page précédante</a>';
}
echo '<a href="#?number='.$numberplus.'">Page suivante</a>';
