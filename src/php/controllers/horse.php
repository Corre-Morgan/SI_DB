<?php
session_start();
chdir('/var/www/php');
require_once 'database.php';
Class HorseController{

    static function load_horse($id){
        $_SESSION['horse'] = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Horse WHERE id ='. $id)->fetch(PDO::FETCH_ASSOC);
    }

    static function load_horses($number){
        $start = $number - 20;
        $_SESSION['horses'] = array();
        $temp = Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query('SELECT * FROM Horse LIMIT '.$number.' OFFSET '.$start);
        while( $row = $temp->fetch(PDO::FETCH_ASSOC)){
            array_push($_SESSION['horses'], $row);
        }
    }

    static function create($params){
        $query = 'INSERT INTO Horse (id_user, id_riding_center, name, breed, lvl, exp, overall_condition, health,
                moral, stress, tiredness, hunger, hygiene, resistance, stamina, jump, speed, social, intelligence, temper)
                VALUES ('.$params['id_user'].','.$params['id_riding_center'].',"'.$params['name'].'","'.$params['breed'].'",
                '.$params['lvl'].','.$params['exp'].','.$params['overall_condition'].','.$params['health'].','.$params['moral'].',
                '.$params['stress'].','.$params['tiredness'].','.$params['hunger'].','.$params['hygiene'].','.$params['resistance'].',
                '.$params['stamina'].','.$params['jump'].','.$params['speed'].','.$params['social'].','.$params['intelligence'].','.$params['temper'].')';
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function update($params, $id){
        $query = 'UPDATE Horse SET id_user = '.$params['id_user'].', id_riding_center = '.$params['id_riding_center'].', name = "'.$params['name'].'",
                breed = "'.$params['breed'].'", lvl = '.$params['lvl'].', exp = '.$params['exp'].', overall_condition = '.$params['overall_condition'].',
                health = '.$params['health'].',moral = '.$params['moral'].', stress = '.$params['stress'].', tiredness = '.$params['tiredness'].',
                hunger = '.$params['hunger'].', hygiene = '.$params['hygiene'].', resistance = '.$params['resistance'].', stamina = '.$params['stamina'].',
                jump = '.$params['jump'].', speed = '.$params['speed'].', social = '.$params['social'].', intelligence = '.$params['intelligence'].',
                temper = '.$params['temper'].' WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }

    static function delete($id){
        $query = 'DELETE FROM Horse WHERE id ='. $id;
        Database::get_instance($_SESSION['pseudo'], $_SESSION['password'])->query($query);
    }
}
