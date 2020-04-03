<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';
Class NewspaperController{

    static function load_newspaper($id){
        $_SESSION['newspaper'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Newspaper WHERE id ='. $id)->fetch(PDO::FETCH_ASSOC);
    }

    static function load_newspapers($number){
        $start = $number - 20;
        $_SESSION['newspapers'] =array();
        $temp = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Newspaper LIMIT '.$number.' OFFSET '.$start);
        while( $row = $temp->fetch(PDO::FETCH_ASSOC)){
            array_push($_SESSION['newspapers'], $row);
        }
    }

    static function create($params){
        $query = 'INSERT INTO Newspaper (id_log, weather, pub) VALUES ('.$params['id_log'].',"'.$params['weather'].'","'.$params['pub'].'")';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Newspaper SET id_log = '.$params['id_log'].', weather = "'.$params['weather'].'", pub = "'.$params['pub'].'" WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Newspaper WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }
}
