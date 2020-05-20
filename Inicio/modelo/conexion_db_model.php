

 <?php

    $server2='localhost';
    $username2='root';
    $password2='';
    $database2='php_login_database';

    $server='localhost';
    $username='lexsuqwu_adminwb';
    $password='413*4ndeR9';
    $database='lexsuqwu_webbraille';
    
//contraseña de usuario en wp:413*4ndeR9
    try{
        $conn=new PDO("mysql:host=$server; dbname=$database;",$username,$password);
    }catch(PDOException $e){
        die('Conexion fallida:'.$e->getMessage());
    }
?>