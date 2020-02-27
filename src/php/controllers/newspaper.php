<?php
require_once '../database.php';

Class NewspaperController{

    static function load_newspaper($id){
        $_SESSION['newspaper'] = Database::get_instance()->query('SELECT * FROM Newspaper WHERE id ='. $id);
    }

    static function load_newspapers(){
        $_SESSION['newspapers'] = Database::get_instance()->query('SELECT * FROM Newspaper');
    }

    static function create($params){
        $query = 'INSERT INTO Newspaper (id_log, weather, pub) VALUES ('.$params['id_log'].','.$params['weather'].','.$params['pub'].')';
        Database::get_instance()->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Newspaper SET id_log = '.$params['id_log'].', weather = '.$params['weather'].', pub = '.$params['pub'].' WHERE id ='. $id;
        Database::get_instance()->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Newspaper WHERE id ='. $id;
        Database::get_instance()->query($query);
    }
}