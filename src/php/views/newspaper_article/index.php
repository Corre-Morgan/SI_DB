<?php
require_once "../../controllers/newspaper_article.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
NewspaperArticleController::load_newspaper_articles($_GET["number"]);
echo '
    <table>
        <thead>
            <tr>
                <th>N° journal</th>
                <th>N° article</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['newspaper_articles'] as $na){
                    echo '<tr>';
                    foreach ($na as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '</tr>';
                }

  echo' </tbody>
    </table>

    <a href="new.php">Nouveau</a>
';
if ($_GET["number"] > 20) {
  echo '<a href="index.php?number='.$numbermoins.'">Page précédente</a>';
}
echo '<a href="index.php?number='.$numberplus.'">Page suivante</a>';
