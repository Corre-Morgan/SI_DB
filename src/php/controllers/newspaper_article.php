<?php
require_once '../database.php';

Class NewspaperArticleController{

    static function load_newspaper_article($params){
        $_SESSION['newspaper_article'] = Database::get_instance()->query('SELECT * FROM Newspaper_Article WHERE id_newspaper = '.$params['id_newspaper'].' AND id_article = '.$params['id_article']);
    }

    static function load_newspaper_articles(){
        $_SESSION['newspaper_articles'] = Database::get_instance()->query('SELECT * FROM Newspaper_Article');
    }

    static function create($params){
        $query = 'INSERT INTO Newspaper_Article (id_newspaper, id_article) VALUES ('.$params['id_newspaper'].','.$params['id_article'].')';
        Database::get_instance()->query($query);
    }

    static function delete($params){
        $query = 'DELETE FROM Newspaper_Article WHERE id_newspaper = '.$params['id_newspaper'].' AND id_article = '.$params['id_article'];
        Database::get_instance()->query($query);
    }

}