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
    private $dsn="mysql:host=localhost;dbname=db07;charset=utf8";
    private $pdo;
    private $table;

    function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn, 'root', '');
    }

    function all(...$arg){

    }

    function find($id){

    }

    function save($array){

    }

    function del($id){

    }
    private function arraytosql($array){
        $tmp=[];
        foreach($array as $key =>$value){
            $tmp[]="`$key`='$value'";
        }
        return $tmp;
    }



}




?>