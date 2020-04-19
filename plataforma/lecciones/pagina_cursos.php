<?php
    

    //session_start();

    include '../modelo/sesion_model.php';

    include "../../rutas_archivos.php";

?>

<?php
    $ncurso=$_GET['var'];
?>




<?php
        require '../devuelve_cursos.php';
        $cursos= new devuelve_cursos();
        $array_cursos=$cursos->get_cursos();
    
?>



<?php
            require '../devuelve_lecciones.php';
            $lecciones= new devuelve_lecciones();
            $array_lecciones=$lecciones->get_lecciones($ncurso);
?>



<?php  
        require '../devuelve_info_user.php';
        $info_user=new devuelve_info_user();
        $array_infouser=$info_user->get_info_user();
    
        $nivel_user='';
        foreach($array_infouser as $user){
            $nivel_user=$user['Progreso'];
        }

        $leccion_cargar='';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plataforma de aprendizaje</title>

    <link rel="stylesheet" href="<?php echo ESTILO_GENERAL; ?>">
    <link rel="stylesheet" href=<?php echo ESTILO_RESPONSIVE; ?>>

    <link rel="stylesheet" href="../css/plataforma_estilos.css">
        
    <link rel="stylesheet" href="<?php echo ICONOS1; ?>">
    <link rel="stylesheet" href="<?php echo ICONOS2; ?>">

    <script src="<?php echo JQUERY; ?>"></script>





</head>
<body>
    <?php include '../vista/header.php'; ?> 
    
    
    <script> var pagina="aprendizaje";</script>
    <?php include '../../nav.php'; ?>

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
            
             <p class='nivel_leccion'> <span id="icono_nivel" class="fas fa-plus"></span> Nivel <?php echo $ncurso?></p>
            
            <div class='div_lecciones' id="lesson-list">
           
                <?php
                    $n=0;
                    foreach($array_lecciones as $elemento){
                        $n++; 

                        
                ?>
                        <p class="leccion" id="leccion<?php echo $n;?>"><span class="icono_leccion far fa-circle"></span>Lección <?php echo $n;?> : <?php echo $elemento['Titulo_leccion'];?></p>
                <?php 
                    }
                ?>
            </div>
        </div>

        <section id="section_lesson">
            <div class="container">
              <div id=slider_lesson>            </div>

            </div>

            <div class="container check-lesson">
                
                <p id="checkbox_text" class="checkoff"><span id="iconcheck" class="mycheckbox far fa-square"></span>Marcar como terminada</p>
                <a class="btn btn-next" id="btn_next">Siguiente lección</a>

            </div >
            
        </section>

        
        
    </main>
    
</body>
</html>

    <script>
        $(document).ready(function(){
            $("#checkbox_text").click(cambiar_check);

            $("#btn_next").click(next_lesson);
        });

        function cambiar_check(e){
           $("#checkbox_text").toggleClass('checkon'); 

           if($("#iconcheck").hasClass("fa-square")){
                $("#iconcheck").removeClass();
                $("#iconcheck").addClass("mycheckbox far fa-check-square");
           }else{
            $("#iconcheck").removeClass();
                $("#iconcheck").addClass("mycheckbox far fa-square");
           }
           
        }



        function next_lesson(){

        }
    </script>


<?php

    foreach($array_lecciones as $elemento){
        
        if($elemento['Id_leccion']==$nivel_user){// buscamos la leccion cuyo id sea igual al progreso del user
            $leccion_cargar=$elemento['url_leccion'];
            echo $leccion_cargar;
        } 

        $arreglo_url_lecciones[]=$elemento['url_leccion'];
    }

    //echo('<pre>');
       // var_dump($arreglo_url_lecciones);
    //echo('</pre>');

     
?>



    <script>/*carga la leccion en la que se quedo el usuario*/ 

        var arrayJS=<?php echo json_encode($arreglo_url_lecciones);?>;
        
        // Mostramos los valores del array
        for(var i=0;i<arrayJS.length;i++)
        {
            document.write("<br>"+arrayJS[i]);
        }


        $(document).ready(function(){

            

            var leccion_cargar= "<?php echo $leccion_cargar;?>";

            $("#slider_lesson").load(leccion_cargar);

            $("#lesson-list p").click(mostrar_slider);

            
        });



        function mostrar_slider(e){
                var url_slider=e.target.id+".html";                //arreglar esta forma de cargar lecciones
                console.log(url_slider);
                $("#slider_lesson").load(url_slider);
        }
    </script>


    <script>//script para poner efectos al menu ocultable
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
        include '../../footer.html';//footer general
    ?>