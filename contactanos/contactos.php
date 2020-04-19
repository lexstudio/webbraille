<?php
    

     include '../rutas_archivos.php';
     include 'modelo/sesion_model.php';
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Braille</title>

    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0,
     maximum-scale=3.0, minimum-scale=1.0">

    <link rel="stylesheet" href="<?php echo ESTILO_GENERAL; ?>">
    <link rel="stylesheet" href=<?php echo ESTILO_RESPONSIVE; ?>>

    <link rel="stylesheet" href="contacto_estilos.css"> 
    <link rel="stylesheet" href="<?php echo ICONOS1; ?>">
    <link rel="stylesheet" href="<?php echo ICONOS2; ?>">
    

    <script src="<?php echo JQUERY; ?>"></script> <!--llamado a la libreria jquery para funciones -->
</head>
<body>





<!-- *******************  agregamos informacion del usuario en sesion******************  -->





<!-- *******************  Estamos agregando el header******************  -->
<?php
        include 'vista/header.php';
?>






<!-- *******************  Estamos agregando el nav******************  -->
    <script> var pagina="contactanos"; </script>
    <?php
           
        include '../nav.php'; //nav general
    ?>
    
<!-- *******************  Seccion Principal******************  -->


    <section class="banner">
            <img src="vista/img/contactanos.jpg" alt="imagen contactanos" class="banner__img">
            <div class="banner__content">Contactate con nosotros</div><!--aqui puede ir el login-->
    </section>


    <main>
        <section class="main">
            <div class="group contact">
                <h2 class="group__title">Contáctanos</h2>
                <div class="container container--flex">
                    <div class="contact-information column column--50">
                        
                        <h3 class="column__title">Información de contácto</h3>
                        <p class="column__txt parrafo-informacion">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Iste eligendi provident voluptates quidem doloribus non eos sapiente, 
                            deserunt aperiam libero nulla reiciendis doloremque vel! Repudiandae nulla quis aspernatur iusto obcaecati.</p>
                        <p class="column__txt"><span class="fas fa-phone"></span>Telefono: 999-999-999</p>
                        <p class="column__txt"><span class="fas fa-map-marker-alt"></span> Dirección: Urb. zona2 mz 4</p>
                        <p class="column__txt"><span class="fas fa-envelope"></span>E-mail: consultas@webbraille.com</p>

                        <div class="social-icon">
                            <a href="" class="social-icon__link"><span class="fab fa-facebook-square"></span></a>
                            <a href="" class="social-icon__link"><span class="fab fa-twitter-square"></span></a>
                            <a href="" class="social-icon__link"><span class="fab fa-telegram"></span></a>
                        </div>
                    </div>

                    <form action="enviar-prueba.php" method="post" class="formulario column column--50">
                        <label for="" class="formulario__label">Nombre:</label>
                        <input type="text" class="formulario__input-txt" name="nombre" required>

                        <label for="" class="formulario__label">Correo:</label>
                        <input type="email" class="formulario__input-txt" name="correo" required>

                        <label for="" class="formulario__label">Teléfono: (opcional)</label>
                        <input type="text" class="formulario__input-txt" name="telefono">

                        <label for="" class="formulario__label">Mensaje:</label>
                        <textarea cols="30" rows="10" class="formulario__textarea" name="mensaje" required></textarea>

                        <input type="submit" class="btn formulario__btn" value="Enviar">
                    </form>
                </div>
            </div>
        </section>
    </main>





    <!-- *******************  Estamos agregando el footer******************  -->
    <?php
        include 'vista/footer.html';
    ?>


    </body>
</html>