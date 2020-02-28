<?php
echo '
    <table>
        <thead>
            <tr>
                <th>N° etablissement</th>
            </tr>
        </thead>
        <tbody';
                foreach ($_SESSION['riding_center'] as $rc){
                    echo '<tr>';
                    foreach ($rc as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';