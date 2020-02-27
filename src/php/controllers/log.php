<?php
require_once '../database.php';

Class LogController{

    static function load_log($id){
        $_SESSION['log'] = Database::get_instance()->query('SELECT * FROM Log WHERE id ='. $id);
    }

    static function load_logs(){
        $_SESSION['logs'] = Database::get_instance()->query('SELECT * FROM Log');
    }

    static function create($params){
        $query = 'INSERT INTO Log (id_user, date, description, value) 
                VALUES ('.$params['id_user'].','.$params['date'].','.$params['description'].','.$params['value'].')';
        Database::get_instance()->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Log SET id_user = '.$params['id_user'].', date = '.$params['date'].', description = '.$params['description'].',
                value = '.$params['value'].' WHERE id ='. $id;
        Database::get_instance()->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Log WHERE id ='. $id;
        Database::get_instance()->query($query);
    }
}