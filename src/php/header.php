<?php
echo " <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        </head>";
session_start();
if (is_null($_SESSION['pseudo'] || is_null($_SESSION['password']))){header('Location: connexion.php');}