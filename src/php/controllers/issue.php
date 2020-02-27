<?php
require_once '../database.php';

Class IssueController{

    static function load_issue($id){
        $_SESSION['issue'] = Database::get_instance()->query('SELECT * FROM Issue WHERE id ='. $id);
    }

    static function load_issues(){
        $_SESSION['issues'] = Database::get_instance()->query('SELECT * FROM Issue');
    }

    static function create($params){
        $query = 'INSERT INTO Issue (type, descritpion) VALUES ('.$params['type'].','.$params['descritpion'].')';
        Database::get_instance()->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Issue SET type = '.$params['type'].', descritpion = '.$params['descritpion'].' WHERE id ='. $id;
        Database::get_instance()->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Issue WHERE id ='. $id;
        Database::get_instance()->query($query);
    }
}