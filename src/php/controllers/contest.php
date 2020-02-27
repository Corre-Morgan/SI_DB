<?php
require_once '../database.php';

Class ContestController{

    static function load_contest($id){
        $_SESSION['contest'] = Database::get_instance()->query('SELECT * FROM Contest WHERE id ='. $id);
    }

    static function load_contests(){
        $_SESSION['contests'] = Database::get_instance()->query('SELECT * FROM Contest');
    }

    static function create($params){
        $query = 'INSERT INTO Contest (id_etablishment, id_facility, begin_date, end_date, price) 
                VALUES ('.$params['id_etablishment'].','.$params['id_facility'].','.$params['begin_date'].','.$params['end_date'].',
                '.$params['price'].')';
        Database::get_instance()->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Contest SET id_etablishment = '.$params['id_etablishment'].', id_facility = '.$params['id_facility'].', begin_date = '.$params['begin_date'].',
                end_date = '.$params['end_date'].', price = '.$params['price'].' WHERE id ='. $id;
        Database::get_instance()->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Contest WHERE id ='. $id;
        Database::get_instance()->query($query);
    }
}