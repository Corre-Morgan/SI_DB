<?php
require_once '../database.php';

Class FacilityController{

    static function load_facility($id){
        $_SESSION['facility'] = Database::get_instance()->query('SELECT * FROM Facility WHERE id ='. $id);
    }

    static function load_facilities(){
        $_SESSION['facilities'] = Database::get_instance()->query('SELECT * FROM Facility');
    }

    static function create($params){
        $query = 'INSERT INTO Facility (id_etablishment, type, lvl, description, family, price, ressource_consumption, item_capacity,
                horse_capacity) 
                VALUES ('.$params['id_etablishment'].','.$params['type'].','.$params['lvl'].','.$params['description'].',
                '.$params['family'].','.$params['price'].','.$params['ressource_consumption'].','.$params['item_capacity'].','.$params['horse_capacity'].')';
        Database::get_instance()->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Facility SET id_etablishment = '.$params['id_etablishment'].', type = '.$params['type'].', lvl = '.$params['lvl'].',
                description = '.$params['description'].', family = '.$params['family'].', price = '.$params['price'].', ressource_consumption = '.$params['ressource_consumption'].',
                item_capacity = '.$params['item_capacity'].',horse_capacity = '.$params['horse_capacity'].' WHERE id ='. $id;
        Database::get_instance()->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Facility WHERE id ='. $id;
        Database::get_instance()->query($query);
    }
}