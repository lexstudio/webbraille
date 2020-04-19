<?php

    $server='localhost';
    $username='root';
    $password='';
    $database='php_login_database';

    $server2='localhost';
    $username2='id12340850_alexander';
    $password2='alexander9';
    $database2='id12340850_webbraillebd';
    

    try{
        $conn=new PDO("mysql:host=$server; dbname=$database;",$username,$password);
    }catch(PDOException $e){
        die('Conexion fallida:'.$e->getMessage());
    }
?>