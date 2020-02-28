<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';
Class EtablishmentController{

    static function load_etablishment($id){
        $_SESSION['etablishment'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Etablishment WHERE id ='. $id)->fetch(PDO::FETCH_ASSOC);
    }

    static function load_etablishments(){
        $_SESSION['etablishments'] = array();
        $temp = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Etablishment');
        while( $row = $temp->fetch(PDO::FETCH_ASSOC)){
            array_push($_SESSION['etablishments'], $row);
        }
    }

    static function create($params){
        $query = 'INSERT INTO Etablishment (id_user, capacity) VALUES ('.$params['id_user'].','.$params['capacity'].')';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Etablishment SET id_user = '.$params['id_user'].', capacity = '.$params['capacity'].' WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Etablishment WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }
}