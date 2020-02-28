<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';
Class ArticleController{

    static function load_article($id){
        $_SESSION['article'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Article WHERE id ='. $id);
    }

    static function load_articles(){
        $_SESSION['articles'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Article');
    }

    static function create($params){
        $query = 'INSERT INTO Article (title, description, img) VALUES ("'.$params['title'].'","'.$params['description'].'","'.$params['img'].'")';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Article SET title = "'.$params['title'].'", description = "'.$params['description'].'", img = "'.$params['img'].'" WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Article WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }
}