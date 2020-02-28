<?php
echo '
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>N° utilisateur</th>
                <th>Montant</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['transactions'] as $transaction){
                    echo '<tr>';
                    foreach ($transaction as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '</tr>';
                }
  echo' </tbody>
    </table>  
    <a href="new.php">Nouveau</a>
';