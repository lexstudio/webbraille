


$(document).ready(function(){
            
    var enlaces=document.getElementsByClassName("btn--cuadro");
    for(var i=0; i<enlaces.length;i++){
        enlaces[i].addEventListener("click",seleccionar_curso,false)
    }
});

function seleccionar_curso(e){
    
   // if(e.target==boton_A){
        
        $(this).attr('href',"pagina_cursos.php?var="<?php $curso;?> ");

    /* }else if(e.target==boton_B){
        $('#boton_B').attr('href','pagina_cursos.php?var=2');
    }else if(e.target==boton_C){
        $('#boton_C').attr('href','pagina_cursos.php?var=3');
    }else if(e.target==boton_D){
        $('#boton_D').attr('href','pagina_cursos.php?var=4');
    } */
}