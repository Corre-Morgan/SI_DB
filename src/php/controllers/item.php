<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';
Class ItemController{

    static function load_item($id){
        $_SESSION['item'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Item WHERE id ='. $id)->fetch(PDO::FETCH_ASSOC);
    }

    static function load_items($number){
        $start = $number - 20;
        $_SESSION['items'] = array();
        $temp = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Item LIMIT '.$number.' OFFSET '.$start);
        while( $row = $temp->fetch(PDO::FETCH_ASSOC)){
            array_push($_SESSION['items'], $row);
        }
    }

    static function create($params){
        $query = 'INSERT INTO Item (id_facility, id_horse, type, lvl, description, item_family, price)
                VALUES ('.$params['id_facility'].','.$params['id_horse'].',"'.$params['type'].'",'.$params['lvl'].',
                "'.$params['description'].'","'.$params['item_family'].'",'.$params['price'].')';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Item SET id_facility = '.$params['id_facility'].', id_horse = '.$params['id_horse'].', type = "'.$params['type'].'",
                lvl = '.$params['lvl'].', description = "'.$params['description'].'", item_family = "'.$params['item_family'].'",
                price = '.$params['price'].' WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Item WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }
}
