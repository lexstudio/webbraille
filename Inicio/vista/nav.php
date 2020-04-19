<?php
    
?>

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
                <a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
                <a href="" class="social-icon__link"><span class="icon-twitter"></span></a>
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
    
    
    