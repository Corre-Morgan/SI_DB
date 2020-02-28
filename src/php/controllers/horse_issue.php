<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';
Class HorseIssueController{

    static function load_horse_issue($params){
        $_SESSION['horse_issue'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Horse_Issue WHERE id_horse = '.$params['id_horse'].' AND id_issue = '.$params['id_issue']);
    }

    static function load_horse_issues(){
        $_SESSION['horse_issues'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Horse_Issue');
    }

    static function create($params){
        $query = 'INSERT INTO Horse_Issue (id_horse, id_issue) VALUES ('.$params['id_horse'].','.$params['id_issue'].')';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function delete($params){
        $query = 'DELETE FROM Transaction WHERE id_horse = '.$params['id_horse'].' AND id_issue = '.$params['id_issue'];
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }
}