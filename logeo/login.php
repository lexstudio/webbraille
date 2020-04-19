<?php 


    include "../rutas_archivos.php";
    
    session_start();    

    if(isset($_SESSION['user_id'])){
        header("Location: /Partes/Inicio/index.php");
    }

    


    require 'modelo/conexion_db_model.php';

    if (!empty($_POST['email']) && !empty($_POST['password'])){                           //solo deja entrar si las cajas de texto email y password no estan vacias
        $records=$conn->prepare('SELECT id, email, password FROM users WHERE email=:email');
        $records->bindParam(':email',$_POST['email']);
        $records->execute();
        $result=$records->fetch(PDO::FETCH_ASSOC);

        $message='';                                                                       //declaramos la variable afuera para que pueda se usada fuera del if

        if(@count($result)>0 && password_verify($_POST['password'],$result['password'])){  //validacion de contraseñas
           $_SESSION['user_id']=$result['id'];
           header('Location: /Partes/Inicio/index.php');                                              // enviamos a esta pagina cuando ingresa el usuario 
        }else{
            $message='Estas credenciales no coinciden';
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0,
     maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="vista/assets/css/estilos_login.css">
    
    <link rel="stylesheet" href="<?php echo ESTILO_GENERAL; ?>">
    <link rel="stylesheet" href=<?php echo ESTILO_RESPONSIVE; ?>>
    <link rel="stylesheet" href=<?php echo ESTILO_LOGIN; ?>>
    <link rel="stylesheet" href="<?php echo ICONOS1; ?>">
    <link rel="stylesheet" href="<?php echo ICONOS2; ?>">
    
</head>
<body>
   
   <?php
        //$ruta_sesion='../modelo/sesion_model.php';
        include 'vista/header.php';
    ?>
    
    <?php if(!empty($message)): /*para mostrar el mensaje de error*/?> 
        <p class ="mensa_error">
            <i><?= $message /*para interpretar el mensaje*/?></i>
        </p> 
    <?php endif; ?>
    
    
    <section class="group group--login">
        
        <div class="container container--login">
           <form action="login.php" method="post">
            <h1 class="titulo--login">Login</h1>
            <input type="email" name="email" placeholder="Ingresa tu correo" autocomplete="off" required autofocus>
            <input type="password" name="password" placeholder="Ingresa tu contraseña" autocomplete="off" required>
            <input type="submit" value="Ingresar">
            <br>
            <span class="form_registrate">or <a href="signup.php">Registrate</a></span>
            
        </div>
    </section>

    </div>
    
 
    
    
    <?php
        include 'vista/footer.html';
    ?>
    
</body>
</html>
    

