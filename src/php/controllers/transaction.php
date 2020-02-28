<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';
Class TransactionController{

    static function load_transaction($id){
        $_SESSION['transaction'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Transaction WHERE id ='. $id)->fetch(PDO::FETCH_ASSOC);
    }

    static function load_transactions(){
        $_SESSION['transactions'] = array();
        $temp = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Transaction');
        while( $row = $temp->fetch(PDO::FETCH_ASSOC)){
            array_push($_SESSION['transactions'], $row);
        }
    }

    static function create($params){
        $query = 'INSERT INTO Transaction (id_user, amount, date) VALUES ('.$params['id_user'].','.$params['amount'].',"'.$params['date'].'")';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Transaction SET id_user = '.$params['id_user'].', amount = '.$params['amount'].', date = "'.$params['date'].'"
                WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Transaction WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }
}