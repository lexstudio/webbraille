<?php 
      
     include "../rutas_archivos.php";
      


    session_start();    

      if(isset($_SESSION['user_id'])){
          header("Location: /Partes");
      }



    require 'vista/header.php';
    require 'modelo/conexion_db_model.php';

       $message='';

       if(!empty($_POST['email']) && (!empty($_POST['password']))){  //valida si no estan vacios nuestros campos email y password


            $sql="INSERT INTO users (Nombre, Apellido, Id_rol, Progreso, Activado, Email, Password) VALUES (:Nombre, :Apellido, :Id_rol, :Progreso, :Activado, :Email, :Password)";
            
            $rol_usuario=2;
            $progreso_usuario=101;
            $activado=1;
            $nombre=ucfirst($_POST['nombre']);
            $apellido=ucfirst($_POST['apellido']);
            $email=$_POST['email'];

            $stmt = $conn->prepare($sql); //ejecuta la consulta sql
            
            $stmt->bindParam(':Nombre' ,$nombre );
            $stmt->bindParam(':Apellido',$apellido );
            $stmt->bindParam(':Id_rol',$rol_usuario);
            $stmt->bindParam(':Progreso',$progreso_usuario);
            $stmt->bindParam(':Activado',$activado);
            $stmt->bindParam(':Email',$email); //vincular parametros
            
            $password=password_hash($_POST['password'],PASSWORD_BCRYPT); //CIFRANDO LAS CLAVES
            $stmt->bindParam(':Password',$password);


            if(buscaRepetido($email)==1){
                    echo 'Correo ya registrado';
            }else{
                if($stmt->execute()){  //si se logro ejecutar la sentencia sql en este caso el insert a la bd
                    $message= 'Cuenta creada satisfactoriamente';

                }else{
                    $message='Lo sentimos no se ha podido crear la cuenta';
                }
            }
            

       }



       function buscaRepetido($correo){
        $server='localhost';
        $username='root';
        $password='';
        $database='php_login_database';
           $conexion= new mysqli($server, $username, $password, $database);
           $sql="SELECT * FROM users where Email='$correo'";
           $result=mysqli_query($conexion,$sql);
           if(mysqli_num_rows($result)>0){
               return 1;
           }else{
               return 0;
           }
       }

    ?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp | Web Braille</title>

    
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0,
     maximum-scale=3.0, minimum-scale=1.0">
     
     

    <link rel="stylesheet" href="<?php echo ESTILO_GENERAL; ?>">
    <link rel="stylesheet" href=<?php echo ESTILO_RESPONSIVE; ?>>
    <link rel="stylesheet" href=<?php echo ESTILO_LOGIN; ?>>
    <link rel="stylesheet" href="<?php echo ICONOS1; ?>">
    <link rel="stylesheet" href="<?php echo ICONOS2; ?>">
   


</head>
<body>
    


   

    <?php if(!empty($message)): ?>
        <p class='registro_ok'><?= $message /*para interpretar el mensaje*/?></p> 
    <?php endif; ?>
    
    

    <form action="signup.php" method="post" class="miregistro">
     <h1 class="titulo--login">Registro</h1>
       
        <input type="text" class="nombre" name="nombre" placeholder="Nombre" autocomplete="off" required autofocus>
        
        <input type="text" class="apellido" name="apellido" placeholder="Apellido" autocomplete="off" required >
        
        <input type="email" class="email" name="email" placeholder="Ingresa tu Email" autocomplete="off" required>
        
        <input type="password" name="password" placeholder="Ingresa tu password" autocomplete="off" required >
        
        <input type="password" name="confirm_password" placeholder="Confirma tu contraseña" autocomplete="off" required>
        
        <input type="submit" value="Registrarse">
        
        <br>
        <span class="form_registrate">or <a href="login.php">Iniciar Sesión</a></span>
        
    </form>
    
    
    
    <?php
        include FOOTER;
    ?>

    
</body>
</html>