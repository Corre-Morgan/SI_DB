<?php
require_once '../database.php';

Class RidingCenterController{

    static function load_riding_center($id){
        $_SESSION['riding_center'] = Database::get_instance()->query('SELECT * FROM Riding_center WHERE id_etablishment ='. $id);
    }

    static function load_riding_centers(){
        $_SESSION['riding_centers'] = Database::get_instance()->query('SELECT * FROM Riding_center');
    }

    static function create($id){
        $query = 'INSERT INTO Riding_center (id_etablishment) VALUES ('.$id.')';
        Database::get_instance()->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Riding_center WHERE id_etablishment ='. $id;
        Database::get_instance()->query($query);
    }
}