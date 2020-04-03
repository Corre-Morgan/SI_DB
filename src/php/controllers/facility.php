<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';
Class FacilityController{

    static function load_facility($id){
        $_SESSION['facility'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Facility WHERE id ='. $id)->fetch(PDO::FETCH_ASSOC);
    }

    static function load_facilities($number){
        $start = $number - 20;
        $_SESSION['facilities'] = array();
        $temp = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Facility LIMIT '.$number.' OFFSET '.$start);
        while( $row = $temp->fetch(PDO::FETCH_ASSOC)){
            array_push($_SESSION['facilities'], $row);
        }
    }

    static function create($params){
        $query = 'INSERT INTO Facility (id_etablishment, type, lvl, description, family, price, ressource_consumption, item_capacity,
                horse_capacity)
                VALUES ('.$params['id_etablishment'].',"'.$params['type'].'",'.$params['lvl'].',"'.$params['description'].'",
                "'.$params['family'].'",'.$params['price'].','.$params['ressource_consumption'].','.$params['item_capacity'].','.$params['horse_capacity'].')';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Facility SET id_etablishment = '.$params['id_etablishment'].', type = "'.$params['type'].'", lvl = '.$params['lvl'].',
                description = "'.$params['description'].'", family = "'.$params['family'].'", price = '.$params['price'].', ressource_consumption = '.$params['ressource_consumption'].',
                item_capacity = '.$params['item_capacity'].',horse_capacity = '.$params['horse_capacity'].' WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Facility WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }
}
