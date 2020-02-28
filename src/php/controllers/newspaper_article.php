<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';
Class NewspaperArticleController{

    static function load_newspaper_article($params){
        $_SESSION['newspaper_article'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Newspaper_article WHERE id_newspaper = '.$params['id_newspaper'].' AND id_article = '.$params['id_article'])->fetch(PDO::FETCH_ASSOC);
    }

    static function load_newspaper_articles(){
        $_SESSION['newspaper_articles'] =array();
        $temp = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Newspaper_article');
        while( $row = $temp->fetch(PDO::FETCH_ASSOC)){
            array_push($_SESSION['newspaper_articles'], $row);
        }
    }

    static function create($params){
        $query = 'INSERT INTO Newspaper_article (id_newspaper, id_article) VALUES ('.$params['id_newspaper'].','.$params['id_article'].')';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function delete($params){
        $query = 'DELETE FROM Newspaper_article WHERE id_newspaper = '.$params['id_newspaper'].' AND id_article = '.$params['id_article'];
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

}