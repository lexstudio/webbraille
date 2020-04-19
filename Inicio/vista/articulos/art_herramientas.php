
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
                <h2 class="titulo__articulo">Artefactos para el aprendizaje Braille</h2>
                

                
                <div>
                       <h3>Máquina Braille Mountbatten</h3>
                          <div class="contenedor_variasimagenes">
                              <img src="../img/mountbatten.jpg" alt="maquina_mountbatten"  width="250px" height="250px">
                          </div>
                         
                         <div class="contenedor_parrafos">
                          <p>
                           
                            Un dispositivo de alta tecnología dedicado a escribir en letras comunes es la Máquina Braille Mountbatten, combina una máquina braille mecánica y una computadora en un solo dispositivo. Tiene las mismas teclas que cualquier máquina braille, pero no hay que hacer tanta presión para que funcionen. 
                            </p>
                            
                            <p>
                            Permite al usuario de esta máquina ir leyendo en papel braille lo que ha escrito. La tecnología de computadora incluida en la máquina permite que los ficheros se guarden para recuperarlos en otro momento y el dispositivo también puede "leer" en voz alta lo que se ha escrito en braille. 
                            </p>
                            
                            <p>
                                Se la usa normalmente con los niños más pequeños o con los que tienen discapacidades adicionales y una fuerza limitada en las manos.
                            </p>
                           
                           <p>
                              Es una gran herramienta que resulta muy útil al momento de realizar una transcripción al braille, pero es necesario realizar una inversión en su costo ya que actualmente se encuentra aproximadamente en los $2653.  
                           </p> 
                            
                        
                        </div>
                    
                    <br>
                    <br>
                    <br>
                    <div>
                       <h3>Pluma Parlante Roy</h3>
                          <div class="contenedor_variasimagenes">
                              <img src="../img/lapiz_roy.jpg" alt="maquina_mountbatten" width="250px" height="250px">
                          </div>
                           
                           <div class="contenedor_parrafos">
                               <p>
                                    Un dispositivo de alta tecnología dedicado a escribir en letras comunes es la Máquina Braille Mountbatten, combina una máquina braille mecánica y una computadora en un solo dispositivo. Tiene las mismas teclas que cualquier máquina braille, pero no hay que hacer tanta presión para que funcionen. Permite al usuario de esta máquina ir leyendo en papel braille lo que ha escrito. 
                                </p> 
                                
                                <p>
                                     La tecnología de computadora incluida en la máquina permite que los ficheros se guarden para recuperarlos en otro momento y el dispositivo también puede "leer" en voz alta lo que se ha escrito en braille. Se la usa normalmente con los niños más pequeños o con los que tienen discapacidades adicionales y una fuerza limitada en las manos.  
                                </p>
                                    
                                <p>
                                    Es una gran herramienta que resulta muy útil al momento de realizar una transcripción al braille, pero es necesario realizar una inversión en su costo ya que actualmente se encuentra aproximadamente en los $2653.
                               </p>
                               
                           </div>
                            
                    </div>
                    
                    <br>
                    <br>
                    <br>

                    
                    <h3>Lector de pantalla JAWS</h3>
                          <div class="contenedor_variasimagenes">
                              <img src="../img/jaws.png" alt="maquina_mountbatten" width="250px" height="250px">
                          </div>
                           
                           <div class="contenedor_parrafos">
                               <p>
                                    "JAWS" es un lector de pantalla para personas ciegas o con visión reducida, siendo el más utilizado en entornos con sistema operativo Windows.
                                    JAWS (acrónimo de Job Access With Speech) es un software lector de pantalla para ciegos o personas con visión reducida. Es un producto del Blind and Low Vision Group de la compañía Freedom Scientific de San Petersburgo, Florida, Estados Unidos.
                                </p> 
                                
                                <p>
                                     Su finalidad es hacer que ordenadores personales que funcionan con Microsoft Windows sean más accesibles para personas con alguna minusvalía relacionada con la visión. Para conseguir este propósito, el programa convierte el contenido de la pantalla en sonido, de manera que el usuario puede acceder o navegar por él sin necesidad de verlo.

                                </p>
                                    
                                <ul>
                                   <li>Instalación hablada: rápida y fácil.</li>
                                   
                                   <li>Dos sintetizadores de voz multilingüe, "Eloquence" y "Vocalizer", con un sonido de habla natural. Ejemplo y descarga de voces "Vocalizer" en varios idiomas.</li>
                                   
                                   <li>Formación básica en formato DAISY en texto y audio.</li>
                                   
                                   <li>Más de 15 años de experiencia trabajando con Windows, distribuido en 55 países y traducido a 24 idiomas.</li>
                                    
                                   <li>
                                       JAWS 11.0.1467, y posteriores, es compatible con monitores duales.
                                   </li>
                                    
                                   <li>
                                       Investigar a su alcance: consultar información de forma rápida y fácil, como definiciones, resultados deportivos, códigos de área, listas de valores, etc.
                                   </li>
                                    
                                    
                                   <li>
                                       Convenient OCR: con sólo pulsar unas teclas, se accede a cualquier imagen en la pantalla que incluya texto.
                                   </li>
                                     
                                    	

                               </ul>
                           </div>
                            
                    </div>
                    
                    
                </div>
                
            </div>
            <a href= '<?php echo INDEX;?>' class="btn btn--contact">Volver</a>
        </section>


        <?php
            include '../seccion_articulos.php';
        ?>
      
    </main>
    
    <?php
        include '../../'.FOOTER; //footer general
    ?>
    
</body>
