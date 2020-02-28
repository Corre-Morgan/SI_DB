<?php
echo '
    <table>
        <thead>
            <tr>
                <th>N° club hyppique</th>
                <th>N° user</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['riding_club_subscribers'] as $rcs){
                    echo '<tr>';
                    foreach ($rcs as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';