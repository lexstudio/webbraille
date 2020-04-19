<?php

  session_start();
  include '../rutas_archivos.php';
  
 // include 'modelo/sesion_model.php';/*Aqui se conecta a la base y valida las sesiones activas*/
?>




<!DOCTYPE html>
<html>
<head>
	<title>Web Braille | Traductor</title>
	
	


    <link rel="stylesheet" href="<?php echo ESTILO_GENERAL; ?>">
    <link rel="stylesheet" href=<?php echo ESTILO_RESPONSIVE; ?>>


    <link rel="stylesheet" href="<?php echo ESTILO_TRADUCTOR; ?>">
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
    <script> var pagina="traductor"; </script>
    <?php
           
        include '../nav.php';
    ?>
<!-- ***********************************************************  -->	
<!-- este es el enlace al script del codigo permite ocultar el menu y hacerlo desplegable -->


     
    

     <section>
            <div class='container'>
                <div class="contenedor__titulo">
                    <h2 class="titulo__pagina">Traductor Braille</h1>
                </div>
                
            </div>
        </section>


    <div class="container">
        <a href="" class="btn btn-voz" id="btn_voz"><span class="fas fa-microphone-alt"></span></a>
    
        <textarea name="atraducir" class="texto" id="texto" cols="80" rows="6" onkeyup="enviarTexto()" placeholder="Introduce el texto a traducir :)"></textarea>
    
       
        <textarea name="traducido" class="texto braille" id="texto2" cols="80" rows="6" readonly="readonly"></textarea>
        
        
        <a href="" class="btn btn--pdf" onclick="">Generar Pdf</a>
    </div>
    
    
   
<!--    <div id="texto"></div>-->

    
    <script>
        function enviarTexto(){
            var texto=document.getElementById("texto").value;
            document.getElementById("texto2").value=texto;
        }    

    </script>
    
    <script src="script_voz.js"></script>
   
    

    <?php
            include 'vista/footer.html';
    ?>
    
</body>
</html>