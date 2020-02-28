<?php
echo '
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>N° utilisateur</th>
                <th>N° centre hyppique</th>
                <th>Nom</th>
                <th>Race</th>
                <th>Niveau</th>
                <th>Expérience</th>
                <th>Etat général</th>
                <th>Santé</th>
                <th>Moral</th>
                <th>Stress</th>
                <th>Fatigue</th>
                <th>Faim</th>
                <th>Hygiene</th>
                <th>Resistance</th>
                <th>Endurance</th>
                <th>Saut</th>
                <th>Vitesse</th>
                <th>Social</th>
                <th>Intel</th>
                <th>Tempérament</th>
            </tr>
        </thead>
        <tbody>';
                foreach ($_SESSION['horses'] as $horse){
                    echo '<tr>';
                    foreach ($horse as $data){
                        echo '<td>'.$data.'</td>';
                    }
                    echo '</tr>';
                }

  echo' </tbody>
    </table>
    
    <a href="new.php">Nouveau</a>
';