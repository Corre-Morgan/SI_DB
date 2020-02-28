<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';
Class RidingClubController{

    static function load_riding_club($id){
        $_SESSION['riding_club'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Riding_club WHERE id_etablishment ='. $id)->fetch(PDO::FETCH_ASSOC);
    }

    static function load_riding_clubs(){
        $_SESSION['riding_clubs'] = array();
        $temp = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Riding_club');
        while( $row = $temp->fetch(PDO::FETCH_ASSOC)){
            array_push($_SESSION['riding_clubs'], $row);
        }
    }

    static function create($id){
        $query = 'INSERT INTO Riding_club (id_etablishment) VALUES ('.$id.')';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Riding_club WHERE id_etablishment ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }
}