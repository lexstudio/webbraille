<?php
    

    include '../../../modelo/sesion_model.php';

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
                <h2 class="titulo__articulo">Sistema Braille</h2>
                <div class="contenedor_imagen_articulo">
                    <img src="../img/braille_alfabeto.jpg" alt="alfab braille">
                </div>  
                
                <p>
                    El sistema Braille consiste en un código de 63 caracteres, constituidos por un rectángulo de seis puntos que conforman una figura determinada. Estos caracteres Braille están unidos en líneas sobre el papel y pueden leerse pasando las yemas de los dedos suavemente sobre el escrito.
                </p>
                
                <p>

                    Durante el siglo XIX se habían realizado otros intentos para conseguir que los invidentes pudieran leer y escribir, aunque ninguno de los proyectos anteriores al Braille fue lo bastante satisfactorio. Braille decidió utilizar el sistema de grabación de los signos en relieve sobre un papel, ya utilizado anteriormente, pero usando un código alfabético distinto del latino y del griego.
                </p>
                
                <p>
                    La escritura se realizaba mediante impresiones en relieve sobre planchas, lo cual permitía un tipo de lectura analítica y táctil a la velocidad de 125 a 175 palabras por minuto. Las matrices que diseñó no sólo representaban letras sino también los números, los signos de puntuación y acentuación y algunas de las contracciones más usuales de los idiomas occidentales. Este sistema se publicó por primera vez en 1829 y fue presentado en su modelo más completo en 1837. No fue aceptado como oficial por la Institution des Aveugles hasta 1854, dos años después de la muerte de Louis Braille, y en 1878 se aprobó en el Congreso Internacional de París como sistema universalista de enseñanza de los invidentes.
                </p>
                
                <p>
                    Las combinaciones de puntos en relieve están ordenadas en una tabla de ocho líneas horizontales; las dos primeras contienen diez matrices, y las seis restantes, nueve, ocho, siete, once, siete y siete respectivamente. Las matrices de las tres primeras líneas indican letras; las de las tres siguientes números y signos gramaticales. En la séptima línea se incluyen caracteres que permiten emplear adecuadamente los anteriores: contracciones, mayúsculas, etc., así como un indicador de que el siguiente carácter es numérico. La octava línea indica las notas musicales. En 1965 se realizó una adaptación del sistema Braille al lenguaje anglosajón, añadiendo símbolos de utilidad para las matemáticas superiores y otras disciplinas técnicas.
                </p>
                
                <p>
                    El sistema Braille también permite la escritura, que se realiza gracias a dos planchas metálicas entre las cuales se coloca el papel; una de las ellas tiene seis agujeros para meter el punzón y horadar según el signo que se desea emplear. Actualmente el sistema Braille puede escribirse también con máquinas con seis llaves, una para cada punto de matriz Braille. La primera máquina para escribir en Braille la inventó Frank H. Hall en 1892.
                </p>
               
            </div>
            <a href="<?php echo INDEX;?>" class="btn btn--contact">Volver</a>
        </section>
        
        <?php
            include '../seccion_articulos.php';
        ?>
    
        
    </main>
    
   <?php
        include '../../'.FOOTER; //footer general
    ?>
    
</body> 