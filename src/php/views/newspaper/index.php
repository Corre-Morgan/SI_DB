<?php
echo '
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>N° log</th>
                <th>Meteo</th>
                <th>Pub</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['newspaper'] as $news){
                    echo '<tr>';
                    foreach ($news as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';