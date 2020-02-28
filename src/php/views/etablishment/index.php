<?php
echo '
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Id utilisateur</th>
                <th>Capacité</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['users'] as $user){
                    echo '<tr>';
                    foreach ($user as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';