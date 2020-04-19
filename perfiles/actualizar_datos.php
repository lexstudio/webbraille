
<?php

    //require 'config_conexion.php';



        require 'devuelve_info_user.php';
        $info_user=new devuelve_info_user();
        $array_infouser=$info_user->get_info_user();

        foreach($array_infouser as $user){

            $id=$user['Id'];

            $act_nombre= $user['Nombre'];
            $act_apellido= $user['Apellido'];
            $act_email=$user['Email'];
            $act_bio=$user['Bio'];
            $act_telefono=$user['Telefono'];

        }

        $new_nombre=$_POST['nombre'];
        $new_apellido=$_POST['apellido'];
        $new_email=$_POST['email'];
        $new_bio=$_POST['bio'];
        $new_telefono=$_POST['telefono'];


        $conexion=mysqli_connect(DB_HOST, DB_USUARIO, DB_CONTRA);
           
        if(mysqli_connect_errno()){
            echo "Fallo al conectar con la BBDD";
            exit();
        }

        mysqli_select_db($conexion,DB_NOMBRE) or die("No se encuentra la BBDD");

        mysqli_set_charset($conexion, "utf8");



        if($new_nombre!=$act_nombre ){

            $sql="UPDATE users set Nombre='$new_nombre' WHERE Id=$id";
            $resultado=mysqli_query($conexion,$sql);

        }

        if($new_apellido!=$act_apellido){
            $sql="UPDATE users set Apellido='$new_apellido' WHERE Id=$id";
            $resultado=mysqli_query($conexion,$sql);
        }

        if($new_email!=$act_email){
            $sql="UPDATE users set Email='$new_email' WHERE Id=$id";
            $resultado=mysqli_query($conexion,$sql);
        }


        if($new_bio!=$act_bio){
            $sql="UPDATE users set Bio='$new_bio' WHERE Id=$id";
            $resultado=mysqli_query($conexion,$sql);
        }

        if($new_telefono){
            $sql="UPDATE users set Telefono='$new_telefono' WHERE Id=$id";
            $resultado=mysqli_query($conexion,$sql);
        }


        $nombre_imagen=$_FILES['boton_imagen']['name'];
        $tipo_imagen=$_FILES['boton_imagen']['type'];
        $tamanio_imagen=$_FILES['boton_imagen']['size'];


        if($tamanio_imagen!=0){

            //ruta de la carpeta destino servidor
            $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/Partes/user_image/';

            //movemos la imagen de la carpeta temporal al directorio escogido
            move_uploaded_file($_FILES['boton_imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);

            echo"<script>
                alert('Datos actualizados');
                
            </script>";


            //guardamos el nombre de la imagen en la base de datos
            $sql="UPDATE users set Foto='$nombre_imagen' WHERE Id=$id";

            $resultado=mysqli_query($conexion,$sql);



            
        }else{
            echo"<script>
                alert('No agrego ninguna imagen');
            </script>";

            
        }



            
        //header("Location: usuario.php");
    

?>