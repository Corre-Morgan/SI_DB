<?php
require_once '../database.php';

Class UserController{

    static function load_user($id){
        $_SESSION['user'] = Database::get_instance()->query('SELECT * FROM user WHERE id = $id');
    }

    static function load_users(){
        $_SESSION['users'] = Database::get_instance()->query('SELECT * FROM user');
    }
}