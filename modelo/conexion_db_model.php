

 <?php

    include "datos_db2.php";
    
//contraseña de usuario en wp:413*4ndeR9
    try{
        $conn=new PDO("mysql:host=$server; dbname=$database;",$username,$password);
    }catch(PDOException $e){
        die('Conexion fallida:'.$e->getMessage());
    }
?>