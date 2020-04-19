<?php
     @session_start();

    require 'conexion_db_model.php';

    if(isset($_SESSION['user_id'])){                                                            //estamos validando si se ha seteado la variable $session 
        $records = $conn->prepare('SELECT * FROM users WHERE id=:id');        //hacemos una coneccion con bd para seleccionar info del usuario que inicio sesion
        $records->bindParam(':id', $_SESSION['user_id']);                                          //igualamos las variables :id con la variable $_Session[user_id] 
        $records->execute();

        $results=$records->fetch(PDO::FETCH_ASSOC);

        $user = null;

        if(count($results) > 0){       //valida si results obtuvo valores al hacer la consulta
            $user=$results;            //igualamos user a los que nos devuelve results
        }
            
    }

?>