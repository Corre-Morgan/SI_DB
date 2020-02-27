<?php
require_once '../database.php';

Class ItemController{

    static function load_item($id){
        $_SESSION['item'] = Database::get_instance()->query('SELECT * FROM Item WHERE id ='. $id);
    }

    static function load_items(){
        $_SESSION['items'] = Database::get_instance()->query('SELECT * FROM Item');
    }

    static function create($params){
        $query = 'INSERT INTO Item (id_facility, id_horse, type, lvl, description, item_family, price) 
                VALUES ('.$params['id_facility'].','.$params['id_horse'].','.$params['type'].','.$params['lvl'].',
                '.$params['description'].','.$params['item_family'].','.$params['price'].')';
        Database::get_instance()->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Item SET id_facility = '.$params['id_facility'].', id_horse = '.$params['id_horse'].', type = '.$params['type'].',
                lvl = '.$params['lvl'].', description = '.$params['description'].', item_family = '.$params['item_family'].',
                price = '.$params['price'].' WHERE id ='. $id;
        Database::get_instance()->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Item WHERE id ='. $id;
        Database::get_instance()->query($query);
    }
}