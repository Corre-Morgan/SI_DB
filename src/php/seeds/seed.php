<?php
session_start();
ini_set('display_errors', 'on');
error_reporting(E_ALL);
$path = $_SERVER["DOCUMENT_ROOT"].'php/controllers/';
$_SESSION['pseudo'] = "root";
$_SESSION['password'] = "root";
ini_set('max_execution_time', 1000);
set_time_limit(1000);
require_once $path.'user.php';
require_once $path.'transaction.php';
require_once $path.'task.php';
require_once $path.'riding_club_subscriber.php';
require_once $path.'riding_club.php';
require_once $path.'riding_center.php';
require_once $path.'prize.php';
require_once $path.'newspaper_article.php';
require_once $path.'newspaper.php';
require_once $path.'log.php';
require_once $path.'item.php';
require_once $path.'issue.php';
require_once $path.'horse_issue.php';
require_once $path.'horse.php';
require_once $path.'facility.php';
require_once $path.'etablishment.php';
require_once $path.'contest.php';
require_once $path.'article.php';

// User seeds
for($i=0; $i <= 1000000; ++$i){
    $params = array(
        "username" => "username".$i,
        "email" => "email".$i."@gmail.com",
        "password" => md5("password".$i),
        "gender" => "F",
        "phone" => "phone".$i,
        "country" => "country".$i,
        "first_name" => "first_name".$i,
        "last_name" => "last_name".$i,
        "birthdate" => "2000-03-01",
        "address" => "address".$i,
        "avatar" => "",
        "description" => "",
        "website" => ""
    );
    UserController::create($params);
}

// Transaction seeds
for($i=0; $i <= 100000; ++$i){
    $params = array(
        "id_user" => $i,
        "amount" => $i * 5,
        "date" => '"'.date("Y-m-d").'"'
    );
    TransactionController::create($params);
}

// Log seeds
for($i=0; $i <= 100000; ++$i){
    $params = array(
        "id_user" => $i,
        "description" => "description".$i,
        "date" => '"'.date("Y-m-d").'"',
        "value" => 2
    );
    LogController::create($params);
}

// Newspaper seeds
for($i=0; $i <= 100000; ++$i){
    $params = array(
        "id_log" => $i,
        "weather" => "weather".$i,
        "pub" => "pub".$i
    );
    NewspaperController::create($params);
}

// Article seeds
for($i=0; $i <= 100000; ++$i){
    $params = array(
        "title" => "title".$i,
        "description" => "description".$i,
        "img" => "img".$i
    );
    ArticleController::create($params);
}

// Newspaper_Article seeds
for($i=0; $i <= 100000; ++$i){
    $params = array(
        "id_newspaper" => $i,
        "id_article" => $i
    );
    NewspaperArticleController::create($params);
}

// Etablishment seeds
for($i=0; $i <= 100000; ++$i){
    $params = array(
        "id_user" => $i,
        "capacity" => $i,
    );
    EtablishmentController::create($params);
}

// Rinding_Center seeds
for($i=0; $i <= 100000; ++$i){
    $params = array(
        "id_etablishment" => $i
    );
    RidingCenterController::create($params);
}

// Horse seeds
for($i=0; $i <= 100000; ++$i){
    $params = array(
        "id_user" => $i,
        "id_riding_center" => $i,
        "name" => "name".$i,
        "breed" => "breed".$i,
        "lvl" => $i,
        "exp" => $i,
        "overall_condition" => $i,
        "health" => $i,
        "moral" => $i,
        "stress" => $i,
        "tiredness" => $i,
        "hunger" => $i,
        "hygiene" => $i,
        "resistance" => $i,
        "stamina" => $i,
        "jump" => $i,
        "speed" => $i,
        "social" => $i,
        "intelligence" => $i,
        "temper" => $i
    );
    HorseController::create($params);
}

// Facility seeds
for($i=0; $i <= 100000; ++$i){
    $params = array(
        "id_etablishment" => $i,
        "type" => "type".$i,
        "lvl" => $i,
        "description" => "description".$i,
        "family" => "family".$i,
        "price" => $i,
        "ressource_consumption" => $i,
        "item_capacity" => $i,
        "horse_capacity" => $i
    );
    FacilityController::create($params);
}

// Item seeds
for($i=0; $i <= 100000; ++$i){
    $params = array(
        "id_facility" => $i,
        "id_horse" => $i,
        "type" => "type".$i,
        "lvl" => $i,
        "description" => "description".$i,
        "item_family" => "item_family".$i,
        "price" => $i
    );
    ItemController::create($params);
}

// Task seeds
for($i=0; $i <= 100000; ++$i){
    $params = array(
        "id_etablishment" => $i,
        "id_item" => $i,
        "action" => "action".$i,
        "frequency" => $i
    );
    TaskController::create($params);
}

// Riding_club seeds
for($i=0; $i <= 100000; ++$i){
    $params = array(
        "id_etablishment" => $i
    );
    RidingClubController::create($params);
}

// Rinding_club_subscriber seeds
for($i=0; $i <= 100000; ++$i){
    $params = array(
        "id_riding_club" => $i,
        "id_user" => $i
    );
    RidingClubSubscriberController::create($params);
}

// Contest seeds
for($i=0; $i <= 100000; ++$i){
    $params = array(
        "id_etablishment" => $i,
        "id_facility" => $i,
        "begin_date" => '"'.date("Y-m-d").'"',
        "end_date" => '"'.date("Y-m-d",mktime(0, 0, 0, 7, 1, 2020)).'"',
        "price" => $i
    );
    ContestController::create($params);
}

// Prize seeds
for($i=0; $i <= 100000; ++$i){
    $params = array(
        "id_contest" => $i,
        "id_item" => $i,
        "rank" => $i
    );
    PrizeController::create($params);
}

// Issue seeds
for($i=0; $i <= 100000; ++$i){
    $params = array(
        "type" => "type".$i,
        "description" => "description".$i
    );
    IssueController::create($params);
}

// Horse_Issue seeds
for($i=0; $i <= 100000; ++$i){
    $params = array(
        "id_horse" => $i,
        "id_issue" => $i
    );
    HorseIssueController::create($params);
}

