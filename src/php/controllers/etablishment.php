<?php
require_once '../database.php';

Class EtablishmentController{

    static function load_etablishment($id){
        $_SESSION['etablishment'] = Database::get_instance()->query('SELECT * FROM Etablishment WHERE id ='. $id);
    }

    static function load_etablishments(){
        $_SESSION['etablishments'] = Database::get_instance()->query('SELECT * FROM Etablishment');
    }

    static function create($params){
        $query = 'INSERT INTO Etablishment (id_user, capacity) VALUES ('.$params['id_user'].','.$params['capacity'].')';
        Database::get_instance()->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Etablishment SET id_user = '.$params['id_user'].', capacity = '.$params['capacity'].' WHERE id ='. $id;
        Database::get_instance()->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Etablishment WHERE id ='. $id;
        Database::get_instance()->query($query);
    }
}