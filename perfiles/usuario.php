<?php
    

    include "../rutas_archivos.php";


    //llamamos a la funcion que devuelve la info del user desde la base de datos
    require 'devuelve_info_user.php';
    $info_user=new devuelve_info_user();
    $array_infouser=$info_user->get_info_user();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>


    <link rel="stylesheet" href="<?php echo ESTILO_GENERAL; ?>">
    <link rel="stylesheet" href=<?php echo ESTILO_RESPONSIVE; ?>>
    
    <link rel="stylesheet" href="<?php echo ICONOS1; ?>">
    <link rel="stylesheet" href="<?php echo ICONOS2; ?>">

    <link rel="stylesheet" href="usuarios.css">

    <script src="<?php echo JQUERY; ?>"></script>
</head>
<body>
    
    <?php
        include 'vista/header.php';
    ?>

    <script> var pagina="perfil"; </script>
    <?php
        
        include '../nav.php'; //nav general
    ?>



    <?php
        
    ?>



    <main class='main'>
        <div class="container">

            <?php
                foreach($array_infouser as $user){
            ?>

                    
            


                <div class="container container--flex">
                    
                        <form action="actualizar_datos.php" method="post" class="formulario column column--50" name=form_user enctype="multipart/form-data">

                            <h2>Editar Perfil</h2>
                            <div class='zona_imagen'>
                                <img src="/user_image/<?= $user['Foto']?>" alt="Imagen perfil">  
                            </div>


                            <input type="file" id="boton_imagen" name="boton_imagen" size ="20" accept="image/*">


                            <label for="" class="formulario__label">Nombre:</label>
                            <input type="text" class="formulario__input-txt" name="nombre" value="<?php echo $user['Nombre']; ?>"  required>

                            <label for="" class="formulario__label">Apellido:</label>
                            <input type="apellido" class="formulario__input-txt" name="apellido" value="<?php echo $user['Apellido']; ?>"  required>

                            <label for="" class="formulario__label">Email:</label>
                            <input type="email" class="formulario__input-txt" name="email" value="<?php echo $user['Email']; ?>"  required>

                            <label for="" class="formulario__label">Teléfono: (opcional)</label>
                            <input type="text" class="formulario__input-txt" value="<?php echo $user['Telefono']; ?>" name="telefono">

                            <label for="" class="formulario__label">Biografía:</label>
                            <textarea cols="30" rows="10" class="formulario__textarea" name="bio" required><?= $user['Bio']?></textarea>

                            
                            <div class="zona_botones">
                                <input type="submit" class="btn formulario__btn" value="Actualizar" id="submit" name="submit" >
                                <input type="button" class="btn formulario__btn btn_cancelar" value="Cancelar">
                            </div>
                            


                        </form>


                        <div class="contact-information column column--50">
                            
                            <div class="header_infouser">
                                <h2 class="column__title">Mi perfil</h2>
                                <span class="boton_edit fas fa-user-edit"></span><p></p>
                            </div>
                            

                            <div class='zona_imagen'>
                                <img src="/user_image/<?= $user['Foto']?>" alt="Imagen perfil" width="50%">
                            </div>



                            <div class="view_infouser">

                                <h3>Nombre:</h3>
                                <p class="column__txt parrafo-informacion"><?= $user['Nombre']?> <?= $user['Apellido']?></p>

                                <h3>Biografía:</h3>
                                <p class="column__txt parrafo-informacion"><?= $user['Bio']?></p>

                                <h3>Teléfono:</h3>
                                <p class="column__txt parrafo-informacion"><?= $user['Telefono']?></p>

                                <h3>E-mail:</h3>
                                <p class="column__txt parrafo-informacion"><?= $user['Email']?></p>
                                
                            </div>
                            
                            
                        </div>




                        <script>
                            $(document).ready(function(){

                                $(".formulario").hide();
                                $(".boton_edit").click(habilitar_edicion);
                                $(".btn_cancelar").click(deshabilitar_edicion);
                                $("#submit").hide();

                                $(".formulario__input-txt").keyup(mostrar_btnactualizar);
                                $(".formulario__textarea").keyup(mostrar_btnactualizar);
                                $("#boton_imagen").click(mostrar_btnactualizar)

                            });
                            
                            function mostrar_btnactualizar(){
                                $("#submit").show();
                            }

                            function habilitar_edicion(){
                                $(".formulario").show();
                                $(".contact-information").hide();
                            }

                            function deshabilitar_edicion(){
                                $(".formulario").hide();
                                $(".contact-information").show();
                                $("#submit").hide()
                            }
                        </script>

                </div>
            <?php } ?>
        </div>
    </main>

   

    
    <?php
        include FOOTER;
    ?>
</body>
</html>