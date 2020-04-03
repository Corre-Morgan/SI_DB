<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';
Class LogController{

    static function load_log($id){
        $_SESSION['log'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Log WHERE id ='. $id)->fetch(PDO::FETCH_ASSOC);
    }

    static function load_logs($number){
        $start = $number - 20;
        $_SESSION['logs'] = array();
        $temp= Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Log LIMIT '.$number.' OFFSET '.$start);
        while( $row = $temp->fetch(PDO::FETCH_ASSOC)){
            array_push($_SESSION['logs'], $row);
        }
    }

    static function create($params){
        $query = 'INSERT INTO Log (id_user, date, description, value)
                VALUES ('.$params['id_user'].',"'.$params['date'].'","'.$params['description'].'",'.$params['value'].')';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Log SET id_user = '.$params['id_user'].', date = "'.$params['date'].'", description = "'.$params['description'].'",
                value = '.$params['value'].' WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Log WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }
}
