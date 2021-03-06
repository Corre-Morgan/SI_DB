<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';
Class IssueController{

    static function load_issue($id){
        $_SESSION['issue'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Issue WHERE id ='. $id)->fetch(PDO::FETCH_ASSOC);
    }

    static function load_issues($number){
        $start = $number - 20;
        $_SESSION['issues'] = array();
        $temp = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Issue LIMIT '.$number.' OFFSET '.$start);
        while( $row = $temp->fetch(PDO::FETCH_ASSOC)){
            array_push($_SESSION['issues'], $row);
        }
    }

    static function create($params){
        $query = 'INSERT INTO Issue (type, descritpion) VALUES ("'.$params['type'].'","'.$params['descritpion'].'")';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Issue SET type = "'.$params['type'].'", descritpion = "'.$params['descritpion'].'" WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Issue WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }
}
