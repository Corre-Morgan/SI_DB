<?php
echo '
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Type</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['issues'] as $issue){
                    echo '<tr>';
                    foreach ($issue as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';