<?php
require_once "../../controllers/task.php";
include_once '../../header.php';
ini_set('display_errors', 'on');
error_reporting(E_ALL);
TaskController::load_tasks();
echo '
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>N° etablissement</th>
                <th>N° item</th>
                <th>Action</th>
                <th>Fréquence</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['tasks'] as $task){
                    echo '<tr>';
                    foreach ($task as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '<td><a href="edit.php?id='.$task["id"].'">Modif</a></td>';
                    echo '<td><a href="delete.php?id='.$task["id"].'">Suppr</a></td>';
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';