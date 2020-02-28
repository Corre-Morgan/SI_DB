<?php
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
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';