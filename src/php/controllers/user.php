<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';

Class UserController{

    static function load_user($id){
        $_SESSION['user'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM User WHERE id ='. $id)->fetch(PDO::FETCH_ASSOC);
    }

    static function load_users($number){
        $start = $number - 20;
        $_SESSION["users"] = array();
        $temp = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM User LIMIT 10 LIMIT '.$number.' OFFSET '.$start);
        while( $row = $temp->fetch(PDO::FETCH_ASSOC)){
            array_push($_SESSION["users"], $row);
        }
    }

    static function create($params){
        $query = 'INSERT INTO User (username, email, password, gender, phone, country, first_name, last_name,
                birth_date, address, avatar, description, website, ip_address, dh_registration, dh_last_connection, money)
                VALUES ("'.$params['username'].'","'.$params['email'].'","'.md5($params['password']).'","'.$params['gender'].'",
                "'.$params['phone'].'","'.$params['country'].'","'.$params['first_name'].'","'.$params['last_name'].'","'.$params['birthdate'].'",
                "'.$params['address'].'","'.$params['avatar'].'","'.$params['description'].'","'.$params['website'].'","","'. date("Y-m-d") .'",null,0)';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function update($params, $id){
        if ($_SESSION["user"]["password"] == $params["password"]){
            $query = 'UPDATE User SET username = "'.$params['username'].'", email = "'.$params['email'].'",
                gender = "'.$params['gender'].'", phone = "'.$params['phone'].'", country = "'.$params['country'].'", first_name = "'.$params['first_name'].'",
                last_name = "'.$params['last_name'].'",birth_date = "'.$params['birthdate'].'", address = "'.$params['address'].'",
                avatar = "'.$params['avatar'].'", description = "'.$params['description'].'", website = "'.$params['website'].'"
                WHERE id ='. $id;
            Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
        }
        else{
            $query = 'UPDATE User SET username = "'.$params['username'].'", email = "'.$params['email'].'", password = "'.md5($params['password']).'",
                gender = "'.$params['gender'].'", phone = "'.$params['phone'].'", country = "'.$params['country'].'", first_name = "'.$params['first_name'].'",
                last_name = "'.$params['last_name'].'",birth_date = "'.$params['birthdate'].'", address = "'.$params['address'].'",
                avatar = "'.$params['avatar'].'", description = "'.$params['description'].'", website = "'.$params['website'].'"
                WHERE id ='. $id;
            Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
        }
    }

    static function delete($id){
        $query = 'DELETE FROM User WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }
}
