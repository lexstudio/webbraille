
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
    
<!-- *******************  Estamos agregando el header******************  -->
    <?php
        include '../header.php';
    ?>


<!-- *******************  Estamos agregando el nav******************  -->
    <?php
        include '../../../nav.php';
    ?>
    
    
    
    <main>
        <section class="group__articulo">
            <div class="container">
                <h2 class="titulo__articulo">Biografía de Louis Braille</h2>
                <div class="contenedor_imagen_articulo">
                    <img src="../img/louisBraille.jpg" alt="Louis Braille">
                </div>
                <div>
                    <p>
                        A los tres años de edad sufrió un accidente que le privó de la vista: trataba de imitar la labor de su padre en el taller familiar de talabartería y se dañó uno de los ojos con el punzón que utilizaba para perforar el cuero. Algún tiempo después, el ojo enfermo infectó el ojo sano y el pequeño Louis perdió la vista para siempre. A pesar de su deficiencia física, Braille asistió durante dos años a la escuela de su localidad natal, y aunque demostró ser uno de los alumnos más aventajados, su familia creyó que el muchacho nunca podría aprender a leer y escribir, ni acceder a través de la educación a un prometedor futuro.
                    </p>
                    <p>
                        Cuando cumplió los diez años ingresó en el Instituto Nacional para Jóvenes Ciegos de París, una de las primeras escuelas especializadas en este campo en todo el mundo, creada con otro nombre poco antes del estallido de la Revolución Francesa. Las condiciones del centro eran muy duras; se imponía a los alumnos una severa disciplina que, sin embargo, no amedrentó el fuerte carácter del joven Braille. En el centro, los pupilos aprendían algunos oficios sencillos y recibían la mayor parte de su instrucción de forma oral. 
                    </p>
                    <p>
                        También asistían a clases de lectura porque el fundador de la escuela, Valentin Haüy, había conseguido desarrollar un sistema de impresión de libros con los caracteres en relieve para permitir la lectura táctil. El método era muy rudimentario: exigía una impresión individualizada en cobre para cada una de las letras y, aunque los alumnos podían tocarlas e identificarlas con las yemas de los dedos, no eran capaces de reproducirlas por sí mismos mediante la escritura.
                    </p>
                    <p>
                        En 1821, un oficial del ejército llamado Charles Barbier de la Serre visitó la escuela para presentar un nuevo sistema de lectura y escritura táctil que podía introducirse en el programa educativo del centro. Barbier había inventado una técnica básica para que los soldados pudieran intercambiarse mensajes en las trincheras durante la noche sin necesidad de hablar, evitando así que el enemigo descubriera su posición. Su invento de escritura nocturna, bautizado con el nombre de Sonography, consistía en colocar sobre una superficie plana rectangular doce puntos en relieve que, al combinarse, representaban sonidos diferentes. 
                    </p>
                    <p>
                        El joven Louis Braille, que había conseguido avanzar notablemente en sus estudios y desarrollar un considerable talento para la música, percibió inmediatamente que las posibilidades del Sonography para la educación de invidentes pasaban por simplificar el sistema aportado por Barbier. En los meses siguientes experimentó con diferentes posibilidades y combinaciones hasta que encontró una solución idónea para reproducir la fonética básica que sólo requería la utilización de seis puntos en relieve. Continuó trabajando varios años más en el perfeccionamiento del sistema y desarrolló códigos diferentes para la enseñanza de materias como la música y las matemáticas. 
                    </p>
                    <p>
                        A pesar de las indudables ventajas que ofrecía para el desarrollo educativo de los niños ciegos, el método inventado por el joven francés no se implantó de forma inmediata. Existieron reticencias entre los docentes sobre la utilidad del sistema, y un profesor de la escuela llegó incluso a prohibir a los chicos su aprendizaje. Afortunadamente, el veto causó un efecto alentador entre los alumnos, que, a escondidas, se esmeraban por estudiar las composiciones de puntos ideadas por su compañero Louis y descubrían que no sólo eran capaces de leer textos, sino también de escribirlos ellos mismos con un simple método de fabricación de puntos en relieve. Por primera vez los invidentes disfrutaban de una autonomía que hasta entonces les había sido vedada.
                    </p>
                    <p>
                        Braille se convirtió en profesor de la escuela y se ganó la admiración de todos sus alumnos. Desgraciadamente, no vivió lo bastante para ver cómo su sistema se adoptaba en todo el mundo. Enfermo de tuberculosis, murió a los 43 años con el pesar de que probablemente su revolucionario invento desaparecería con él. No se cumplieron los malos presagios del pedagogo francés, porque ya eran muchos los que habían descubierto la eficacia de su método. En 1860, el sistema Braille se introdujo en la escuela para ciegos de San Luis (Estados Unidos).
                    </p>
                    <p>
                        En 1868, un grupo de cuatro invidentes, liderado por el doctor Thomas Armitage, fundó en el Reino Unido una sociedad para impulsar el perfeccionamiento y la difusión de la literatura grabada en relieve para ciegos. Este pequeño grupo de amigos creció hasta convertirse en el Instituto Nacional de Ciegos, el mayor editor de textos en Braille en Europa y la mayor organización británica para personas con discapacidad visual. En el siglo XX, el método Braille se había implantado en casi todos los países del mundo.
                    </p>
                    <p>
                        La gran aportación de Louis Braille a la educación y a la calidad de vida de la población invidente fue finalmente reconocida en su país: en 1952, cuando se cumplía el centenario de su muerte, su cuerpo fue trasladado al Panteón parisino donde reposan los restos de los héroes nacionales. Aquel mismo año, la Asociación Amigos de Louis Braille compró la casa de Coupvray donde en 1809 había nacido el educador, y poco después el Consejo Mundial para la Promoción Social de los Ciegos se encargó de su administración a través del Comité Louis Braille. En 1966, el estado francés inscribió la casa natal en el inventario de monumentos históricos. En 1984, cuando el Consejo se fusionó con la Federación Internacional de Ciegos y surgió la actual Unión Mundial de Ciegos, la casa natal y el Comité Braille pasaron a formar parte de la Unión.
                    </p>
                
                </div>
                
            </div>
            <a href="<?php echo INDEX;?>" class="btn btn--contact">Volver</a>
        </section>
        
        <?php
            include '../seccion_articulos.php';
        ?>
    
        
    </main>
    
    <?php
        include '../../'.FOOTER;
    ?>
    
</body>   