<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';
Class PrizeController{

    static function load_prize($id){
        $_SESSION['prize'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Prize WHERE id_contest ='. $id);
    }

    static function load_prizes(){
        $_SESSION['prizes'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Prize');
    }

    static function create($params){
        $query = 'INSERT INTO Prize (id_contest, id_item, rank) VALUES ('.$params['id_contest'].','.$params['id_item'].','.$params['rank'].')';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Prize SET id_item = '.$params['id_item'].', rank = '.$params['rank'].' WHERE id_contest ='. $params['id_contest'];
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Prize WHERE id_contest ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }
}