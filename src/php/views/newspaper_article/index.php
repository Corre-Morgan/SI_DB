<?php
require_once "../../controllers/newspaper_article.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
UserController::load_users();
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