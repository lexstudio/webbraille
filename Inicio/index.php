
<?php
    
    //include 'modelo/sesion_model.php';
    session_start();
    include "../rutas_archivos.php";
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
    
    <link rel="stylesheet" href="<?php echo ICONOS1; ?>">
    <link rel="stylesheet" href="<?php echo ICONOS2; ?>">

    
    <script src="<?php echo JQUERY; ?>"></script> <!--llamado a la libreria jquery para funciones -->

</head>






<body>
     
<!-- *******************  Estamos agregando el header******************  -->
    <?php
        
        include 'vista/header.php';
    ?>
<!-- ***********************************************************  -->




<!-- *******************  Estamos agregando el nav******************  -->
    <script> var pagina="index"; </script>
    <?php
           
        include '../nav.php'; //no pude utilizar ruta estatica pero es el nav general
    ?>
<!-- ***********************************************************  -->






    
    <section class="banner">
        <img src="vista/img/braille1.jpg" alt="" class="banner__img">
        <div class="banner__content">Plataforma de aprendizaje Braille</div><!--aqui puede ir el login-->
    </section>


    <main class="main">
        <section class="group group--color">
            <div class="container">
                <h2 class="main__title">Bienvenido querido amigo!</h2>
                <p class="main__txt">Este sitio es creado para aquellos que conocen la importancia de crear una sociedad inclusiva, te invitamos a formar
                                    parte de esta comunidad que busca igualar las condiciones para todos!</p>
            </div>
        </section>

        <section class="group main__about__description">
            <div class="container container--flex">
                <div class="column column--50">
                    <img src="vista/img/Braille-Neue.jpg" alt="aprendizaje_braille">
                </div>

                <div class="column column--50">
                    <h3 class="column__title">Plataforma de Aprendizaje Braille</h3>
                    <p class="column__txt">Aprende el sistema de comunicación Braille en nuestra plataforma gratuita 
                        de aprendizaje de una manera muy didactica y entretenida</p>
                    <a href=<?php echo PLATAFORMA_APRENDIZAJE;?> class="btn btn--aprender">Aprender</a>
                </div>

            </div>
        </section>


        <?php
            include 'vista/seccion_articulos.php';
        ?>
    
        

    </main>

    <?php
        include FOOTER; //footer general
    ?>
    
    

</body>
</html>