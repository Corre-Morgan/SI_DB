<?php
require_once '../database.php';

Class RidingClubController{

    static function load_riding_club($id){
        $_SESSION['riding_club'] = Database::get_instance()->query('SELECT * FROM Riding_club WHERE id_etablishment ='. $id);
    }

    static function load_riding_clubs(){
        $_SESSION['riding_clubs'] = Database::get_instance()->query('SELECT * FROM Riding_club');
    }

    static function create($id){
        $query = 'INSERT INTO Riding_club (id_etablishment) VALUES ('.$id.')';
        Database::get_instance()->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Riding_club WHERE id_etablishment ='. $id;
        Database::get_instance()->query($query);
    }
}