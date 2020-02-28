<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';
Class RidingClubSubscriberController{

    static function load_riding_club_subscriber($params){
        $_SESSION['riding_club_subscriber'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Riding_club_subscriber WHERE id_riding_club = '.$params['id_riding_club'].' AND id_user = '.$params['id_user'])->fetch(PDO::FETCH_ASSOC);
    }

    static function load_riding_club_subscribers(){
        $_SESSION['riding_club_subscribers'] = array();
        $temp = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Riding_club_subscriber');
        while( $row = $temp->fetch(PDO::FETCH_ASSOC)){
            array_push($_SESSION['riding_club_subscribers'], $row);
        }
    }

    static function create($params){
        $query = 'INSERT INTO Riding_club_subscriber (id_riding_club, id_user) VALUES ('.$params['id_riding_club'].','.$params['id_user'].')';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function delete($params){
        $query = 'DELETE FROM Transaction WHERE id_riding_club = '.$params['id_riding_club'].' AND id_user = '.$params['id_user'];
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }
}