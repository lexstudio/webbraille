<?php
    

    session_start();

    include "../rutas_archivos.php";

?>

<?php
    $ncurso=$_GET['var'];
    echo $ncurso;
?>




<?php
        require 'devuelve_cursos.php';
        $cursos= new devuelve_cursos();
        $array_cursos=$cursos->get_cursos();
    
?>



<?php
            require 'devuelve_lecciones.php';
            $lecciones= new devuelve_lecciones();
            $array_lecciones=$lecciones->get_lecciones($ncurso);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo ESTILO_GENERAL; ?>">
    <link rel="stylesheet" href=<?php echo ESTILO_RESPONSIVE; ?>>

    <link rel="stylesheet" href="css/plataforma_estilos.css">
        
    <link rel="stylesheet" href="<?php echo ICONOS1; ?>">
    <link rel="stylesheet" href="<?php echo ICONOS2; ?>">

    <script src="vista/assets/js/Jquery/jquery-3.4.1.js"></script>





</head>
<body>
    <?php include 'vista/header.php'; ?> 
    
    
    <script> var pagina="aprendizaje";</script>
    <?php include '../nav.php'; ?>

    <main class="main">
        
        <section>
            <div class='container'>
                <div class="contenedor__titulo">
                    <h2 class="titulo__pagina">Plataforma de aprendizaje Braille<br>Nivel <?php echo $ncurso; ?></h2>
                </div>
                
            </div>
        </section>
        

        <div id=menu_desplegable>
            <div id="boton_menu_lecciones">
                <span id="icono" class="fas fa-angle-double-right"></span>
            </div>
            
            <p class='nivel_leccion'> <span id="icono_nivel" class="fas fa-plus"></span> Nivel A</p>
            
            <div class='div_lecciones' id="lesson-list">
           
            <?php
                $n=0;
                foreach($array_lecciones as $elemento){
                    $n++; 
            ?>
                    <p class="leccion"><span class="icono_leccion far fa-circle"></span>Leccion <?php echo $n;?> : <?php echo $elemento['Titulo_leccion'];?></p>
            <?php 
                }
            ?>
            </div>
        </div>

        <section id="section_lesson">
            <div class="container">
                <div id=slider_lesson>
                
                </div>
                
            </div>

        </section>

    </main>
    
</body>
</html>





    <script>
        $(document).ready(function(){
            $("#lesson-list p").click(function(){
                $("#slider_lesson").load("lecciones/slider.html");
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            
            $(".div_lecciones").hide();
            var n=1;

            $(".nivel_leccion").click(function(){
                if(n%2==1){
                    $("#icono_nivel").removeClass();
                    $("#icono_nivel").addClass("fas fa-minus");
                    
                }else{
                    $("#icono_nivel").removeClass();
                    $("#icono_nivel").addClass("fas fa-plus");
                }
                n++;
               $(this).next(".div_lecciones").fadeToggle(500);
           });

            $("#icono").click(function() {
                var oculto = $("#menu_desplegable").css("left") == "-300px";
                if(oculto){
                    $("#menu_desplegable").animate({left:"0px"}, 1000);
                    $("#icono").removeClass();
                    $('#icono').addClass("fas fa-angle-double-left");
                }else{
                    $("#menu_desplegable").animate({left:"-300px"}, 1000);
                    $("#icono").removeClass();
                    $('#icono').addClass("fas fa-angle-double-right");
                }
            });
        });
    </script>



    <?php
        include '../footer.html'; //footer general
    ?>