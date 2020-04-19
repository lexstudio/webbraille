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
</head>
<body>

 <?php
        include '../header.php';
    ?>

    <?php
        include '../nav.php';
    ?>
    
    



<main>
        <section class="group__articulo">
            <div class="container">
                <h2 class="titulo__articulo">Articulo 4</h2>
                
                <div class="contenedor_imagen_articulo">
                    <img src="../img/web-en-construcci%C3%B3n-1600x1131.jpg" alt="pagina en construccion">
                </div>

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