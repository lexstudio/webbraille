

<script src="/Partes/assets/js/jquery-3.4.1.js"></script> <!--llamado a la libreria jquery para funciones -->


<script>
        
      /*Este es un script basado en jquery para seleccionar una opcion en el nav*/  
    
        $(document).ready(function(){
            
        
            if(pagina=="index"){
                
                $("#enlacenav1").addClass("menu__link--select");
            }else if(pagina=="traductor"){
               
                $("#enlacenav2").addClass("menu__link--select");
            }else if(pagina=="aprendizaje"){
                
                $("#enlacenav3").addClass("menu__link--select");
            }else if(pagina=="contactanos"){
                
                $("#enlacenav4").addClass("menu__link--select");
            }
        });
  
</script>
             

       
<nav class="main-nav"><!--barra de navegacion-->
        <div class="container container--flex">
            <span class="icon-menu" id="btnmenu"></span> <!--boton del menu-->
            <ul class="menu" id="menu">
                
                <li class="menu__item"><a id="enlacenav1" href='<?php echo INDEX;?>' class="menu__link">Inicio</a></li>
                
                <li class="menu__item"><a id="enlacenav2" href=<?php echo TRADUCTOR;?> class="menu__link">Traductor</a></li>
                
                <li class="menu__item"><a id="enlacenav3" href= <?php echo PLATAFORMA_APRENDIZAJE;?> class="menu__link">Aprendizaje</a></li>
                <li class="menu__item"><a id="enlacenav4" href=<?php echo CONTACTANOS;?> class="menu__link">Contactanos</a></li>
            </ul>

            <div class="social-icon"> 
                <a href="https://www.facebook.com" class="social-icon__link" target="_bLank"><span class="icon-facebook" ></span></a>
                <a href="https://www.twitter.com" class="social-icon__link" target="_blank"><span class="icon-twitter"></span></a>
                <a href="" class="social-icon__link"><span class="icon-mail"></span></a>
            </div>
        </div>
</nav>


    
<script>
    //este es el enlace al script del codigo permite ocultar el menu y hacerlo desplegable


    let btnMenu= document.getElementById("btnmenu");
    
    let menu= document.getElementById("menu");
    
    btnMenu.addEventListener("click",function(){
        'use strict';
        menu.classList.toggle('mostrar');
    });
</script>
    
    

<script>
    $(document).ready(function(){
        $('#enlacenav3').click(verifica_sesion);
        $('#enlacenav2').click(verifica_sesion);
        $('.btn--aprender').click(verifica_sesion);

    });

    function verifica_sesion(){
        var sesion=1;
        <?php 
            if (!isset($_SESSION['user_id'])) {
                echo "var sesion = 0";
            }
        ?>

        if (sesion==0){
            alert('No has iniciado sesion aun');
            $('#enlacenav2').attr('href','/Partes/logeo/login.php');
            $('#enlacenav3').attr('href','/Partes/logeo/login.php');
            $('.btn--aprender').attr('href','/Partes/logeo/login.php');
        }
        
    }

</script>