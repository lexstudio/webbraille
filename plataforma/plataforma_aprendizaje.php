
<?php

    include 'modelo/sesion_model.php';

    include "../rutas_archivos.php";

    require 'devuelve_cursos.php';
    $cursos= new devuelve_cursos();
    $array_cursos=$cursos->get_cursos();

    
    
    require 'devuelve_info_user.php';
    $info_user=new devuelve_info_user();
    $array_infouser=$info_user->get_info_user();

    $nivel_user='';
    foreach($array_infouser as $user){
        $nivel_user=$user['Progreso'];
    }

/*     if($nivel_user<200){
        echo "Estas en el nivel 1";
    }else if($nivel_user<300){
        echo "Estas en el nivel 2";
    }else if ($nivel_user<400){
        echo "Estas en el nivel 3";
    }else if($nivel_user<500){
        echo "Estas en el nivel 4";
    } */
    
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


    <link rel="stylesheet" href="css/plataforma_estilos.css">
    
    
    <link rel="stylesheet" href="<?php echo ESTILO_GENERAL; ?>">
    <link rel="stylesheet" href=<?php echo ESTILO_RESPONSIVE; ?>>
    
    <link rel="stylesheet" href="<?php echo ICONOS1; ?>">
    <link rel="stylesheet" href="<?php echo ICONOS2; ?>">

    <script src="<?php echo JQUERY; ?>"></script> <!--llamado a la libreria jquery para funciones -->

   <!-- <script src="plataforma_script.js"></script>js para dar funcion a los botones de los cursos-->

</head>








<body class="body__plataforma">
    


    
    <?php 
        include 'vista/header.php'; 
    ?> 
    
    
    <script> var pagina="aprendizaje";</script>
    <?php 
        include '../nav.php'; //nav general
    ?> 
    
    
 
   


   
   
    <main class="main">
        
        <section>
            <div class='container'>
                <div class="contenedor__titulo">
                    <h2 class="titulo__pagina">Plataforma de aprendizaje Braille</h1>
                </div>
                
            </div>
        </section>

        

        <section class="group niveles_cursos">
            <div class="container container--flex">


                <?php
                    $contador_niveles=100;
                    foreach($array_cursos as $elemento){
                    $curso=$elemento['Id_curso'];
                    
                    
                    $array_nlecciones=$cursos->get_nlecciones($curso);//realizamos una coneccion con la funcion devuelve cursos la funcion get_nlecciones() devuelve la cantidad de lecciones

                    foreach($array_nlecciones as $numlecciones){
                        $nlecciones= $numlecciones['nlecciones'];
                    };
                    
                    
                    
                    if($nivel_user>$contador_niveles){
                        
                        $classblock="desbloqueado";
                    }else{
                        $classblock="bloqueado";
                    }

                ?>
                      
                    <div id="<?php echo $elemento['Nivel_curso'];?>" class="column column--50-25 cuadro cuadro__curso <?php echo $classblock;?>" >
                           
                            <h3 class="cuadro titulo__curso"><?php echo $elemento['Titulo_curso'];?> <br> 
                                                        Nivel <?php echo $elemento['Id_curso'];?>
                            </h3>

                            <p class="cuadro n--lecciones"><?php echo $nlecciones?> Lecciones</p>
                            <p class="cuadro descripcion--curso"><?php echo $elemento['Descripcion_curso'];?></p>
                            <a id="boton_<?php echo $elemento['Nivel_curso'];?>" href="#" class="btn btn--cuadro">Acceder</a>
                    </div>
                    

                <?php
                      $contador_niveles=$contador_niveles+100;  
                    }
                ?>


                <script>
                    $(document).ready(function(){
            
                        var enlaces=document.getElementsByClassName("btn--cuadro");
                        for(var i=0; i<enlaces.length;i++){
                         enlaces[i].addEventListener("click",seleccionar_curso,false)
                        }
                    });
        
                    function seleccionar_curso(e){
                
                        if(e.target==boton_A){
        
                            $(this).attr('href',"lecciones/pagina_cursos.php?var=1");

                        }else if(e.target==boton_B){
                            $('#boton_B').attr('href',"lecciones/pagina_cursos.php?var=2");
                        }else if(e.target==boton_C){
                            $('#boton_C').attr('href','lecciones/pagina_cursos.php?var=3');
                        }else if(e.target==boton_D){
                            $('#boton_D').attr('href','lecciones/pagina_cursos.php?var=4');
                        } 
                    
                    }
                </script>

                
            </div>
        </section>
        

    </main>
 



    <?php
        include 'vista/footer.html';
    ?>
    
    

</body>
</html>