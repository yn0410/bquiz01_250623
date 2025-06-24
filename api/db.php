<?php
session_start();
date_default_timezone_set("Asia/Taipei");

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function q($sql){
    $dsn="mysql:host=localhost;dbname=db07;charset=utf8";
    $pdo=new PDO($dsn, 'root', '');
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function to($url){
    header("location:".$url);
}

class DB{
    
}




?>