<?php
echo '
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>N° facility</th>
                <th>N° cheval</th>
                <th>Type</th>
                <th>Niveau</th>
                <th>Description</th>
                <th>Famille</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['items'] as $item){
                    echo '<tr>';
                    foreach ($item as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';