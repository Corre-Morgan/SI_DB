<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';
Class TaskController{

    static function load_task($id){
        $_SESSION['task'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Task WHERE id ='. $id)->fetch(PDO::FETCH_ASSOC);
    }

    static function load_tasks(){
        $_SESSION['tasks'] = array();
        $temp = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Task');
        while( $row = $temp->fetch(PDO::FETCH_ASSOC)){
            array_push($_SESSION['tasks'], $row);
        }
    }

    static function create($params){
        $query = 'INSERT INTO Task (id_etablishment, id_item, action, frequency) 
                VALUES ('.$params['id_etablishment'].','.$params['id_item'].',"'.$params['action'].'",'.$params['frequency'].')';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Task SET id_etablishment = '.$params['id_etablishment'].', id_item = '.$params['id_item'].', action = "'.$params['action'].'",
                frequency = '.$params['frequency'].' WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Task WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }
}