<?php
require_once '../database.php';

Class UserController{

    static function load_user($id){
        $_SESSION['user'] = Database::get_instance()->query('SELECT * FROM User WHERE id ='. $id);
    }

    static function load_users(){
        $_SESSION['users'] = Database::get_instance()->query('SELECT * FROM User');
    }

    static function create($params){
        $query = 'INSERT INTO User (username, email, password, gender, phone, country, first_name, last_name,
                birth_date, adress, avatar, description, website, ip_adress, dh_registration, dh_last_connection, money) 
                VALUES ('.$params['username'].','.$params['email'].','.$params['password'].','.$params['gender'].',
                '.$params['phone'].','.$params['country'].','.$params['first_name'].','.$params['last_name'].','.$params['birth_date'].',
                '.$params['adress'].','.$params['avatar'].','.$params['description'].','.$params['website'].',null,null,null,0)';
        echo $query;
        die();
        Database::get_instance()->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE User SET username = '.$params['username'].', email = '.$params['email'].', password = '.$params['password'].',
                gender = '.$params['gender'].', phone = '.$params['phone'].', country = '.$params['country'].', first_name = '.$params['first_name'].',
                last_name = '.$params['last_name'].',birth_date = '.$params['birth_date'].', adress = '.$params['adress'].',
                avatar = '.$params['avatar'].', description = '.$params['description'].', website = '.$params['website'].'
                WHERE id = $id';
        Database::get_instance()->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM User WHERE id ='. $id;
        Database::get_instance()->query($query);
    }
}