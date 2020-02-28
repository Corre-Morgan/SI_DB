<?php
require_once "../../controllers/article.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
UserController::load_articles();
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
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';