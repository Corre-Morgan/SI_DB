<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';
Class HorseIssueController{

    static function load_horse_issue($params){
        $_SESSION['horse_issue'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Horse_issue WHERE id_horse = '.$params['id_horse'].' AND id_issue = '.$params['id_issue'])->fetch(PDO::FETCH_ASSOC);
    }

    static function load_horse_issues(){
        $_SESSION['horse_issues'] = array();
        $temp= Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Horse_issue');
        while( $row = $temp->fetch(PDO::FETCH_ASSOC)){
            array_push($_SESSION['horse_issues'], $row);
        }
    }

    static function create($params){
        $query = 'INSERT INTO Horse_issue (id_horse, id_issue) VALUES ('.$params['id_horse'].','.$params['id_issue'].')';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function delete($params){
        $query = 'DELETE FROM Horse_issue WHERE id_horse = '.$params['id_horse'].' AND id_issue = '.$params['id_issue'];
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }
}