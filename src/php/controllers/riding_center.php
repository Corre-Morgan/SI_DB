<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';
Class RidingCenterController{

    static function load_riding_center($id){
        $_SESSION['riding_center'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Riding_center WHERE id_etablishment ='. $id)->fetch(PDO::FETCH_ASSOC);
    }

    static function load_riding_centers(){
        $_SESSION['riding_centers'] = array();
        $temp = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Riding_center');
        while( $row = $temp->fetch(PDO::FETCH_ASSOC)){
            array_push($_SESSION['riding_centers'], $row);
        }
    }

    static function create($id){
        $query = 'INSERT INTO Riding_center (id_etablishment) VALUES ('.$id.')';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Riding_center WHERE id_etablishment ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }
}