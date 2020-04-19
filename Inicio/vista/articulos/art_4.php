<?php
    
    include '../../modelo/sesion_model.php';

    include "../../../rutas_archivos.php";
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

    <!-- zona de estilos -->
    <link rel="stylesheet" href="<?php echo ESTILO_GENERAL; ?>">
    <link rel="stylesheet" href=<?php echo ESTILO_RESPONSIVE; ?>>
    <link rel="stylesheet" href= <?php echo ESTILO_ARTICULOS; ?>> 
    <link rel="stylesheet" href="<?php echo ICONOS1; ?>">
    <link rel="stylesheet" href="<?php echo ICONOS2; ?>">
</head>
<body>

 <?php
        include '../header.php';
    ?>

    <?php
        include '../../../nav.php'; //nav general
    ?>
    
    



<main>
        <section class="group__articulo">
            <div class="container">
                <h2 class="titulo__articulo">Una sociedad inclusiva </h2>
                
                <figure class="contenedor_imagen_articulo">
                    <img src="../img/inclusion.jpg" alt="pagina en construccion">
                </figure>
                <br>
                <p>
                    Una sociedad inclusiva es aquella que reconoce que todas las personas tienen el mismo valor, 
                    sólo por la condición de ser humano. La inclusión en la comunidad se da desde la primera infancia
                    y debe suceder durante toda la vida.

                </p>
                    <strong>La Inclusión Social es:</strong>
                <p>
                   <ul>
                       <li>Un proceso que asegura que todos los integrantes de la sociedad participen de forma equitativa en diferentes ámbitos: educativo, económico, legal, político, cultural, etc.</li>
                        <br>
                       <li>Implica reconocer en los grupos sociales distintos el valor que hay en cada diferencia, el respeto a la diversidad, y el reconocimiento de un tercero vulnerable, con necesidades específicas que deben ser saciadas para que pueda estar en condiciones de igualdad  y disfrutar de sus derechos fundamentales (Bélgica, 2008).</li>
                        <br>
                       <li>Significa pensar en lo que sucede cuando niños, niñas y adolescentes interactúan en el sistema en el que se encuentran incluidos la familia y el colegio, es decir en la comunidad y después de la etapa escolar.</li>
                        <br>
                       <li>Cubre aspectos como la vida (plena) en comunidad, la autonomía en la toma de decisiones, la participación ciudadana, el acceso y uso de los bienes y servicios disponibles para los ciudadanos.</li>
                   </ul> 
                    
                    
                    

                    Una sociedad inclusiva, por tanto, dispondrá y habilitará mecanismos para asegurar la garantía de los Derechos Humanos, la dignidad y la ciudadanía activa de todas las personas que la componen.
                </p>
                    
                 
            <a href='<?php echo INDEX;?>' class="btn btn--contact">Volver</a>
        </section>


        <?php
            include '../seccion_articulos.php';
        ?>
      
    </main>
    


    
    <?php
        include '../footer.html';
    ?>
    
</body>