<?php
	include '../../rutas_archivos.php';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script src="jquery-3.1.1.js"></script>
	<script src="artyom.min.js"></script>
	<script src="artyomCommands.js"></script>

	  <link rel="stylesheet" href="<?php echo ESTILO_GENERAL; ?>">
    <link rel="stylesheet" href=<?php echo ESTILO_RESPONSIVE; ?>>


    <link rel="stylesheet" href="<?php echo ESTILO_TRADUCTOR; ?>">
    <link rel="stylesheet" href="<?php echo ICONOS1; ?>">
    <link rel="stylesheet" href="<?php echo ICONOS2; ?>">

	
</head>
<body>

<!-- *******************  Estamos agregando el header******************  -->
<?php
  include '../vista/header.php';
?>
<!-- ***********************************************************  -->


<!-- *******************  Estamos agregando el nav******************  -->
<script> var pagina="traductor"; </script>
<?php  
  include '../../nav.php'; //nav general
?>
<!-- ***********************************************************  -->	
	

<section>
  <div class='container'>
	<div class="contenedor__titulo">
			<h2 class="titulo__pagina">Traductor Braille</h1>
	</div>
                
  </div>
</section>


	
	
		<!-- botonera -->
		<div  class="container">
			<button onclick="startArtyom();"  id="btn-microfono" class="btn-voz">
				<span class="fas fa-microphone-alt"></span>
			</button>
				
			<button onclick="stopArtyom();" id="btn-microfono-off" class="btn-voz btn-voz-cancel">
				<span class="fas fa-microphone-alt-slash"></span>
			</button>
			
		</div>

	
			
	

		<!-- Menu -->
		<div class="container">
			<a href="http://www.facebook.com/intecsolt/" target="_blank" id="uno">uno</a> | 
			<a href="http://www.facebook.com/intecsolt/" target="_blank" id="dos">dos</a> | 
			<a href="http://www.facebook.com/intecsolt/" target="_blank" id="tres">tres</a> | 
			<a href="http://www.facebook.com/intecsolt/" target="_blank" id="cuatro">cuatro</a> | 
		</div>

		<div class="container">
			<textarea id="texto_entrada" onkeyup="enviarTexto()" class="texto" rows="6" cols="80" placeholder="Introduce el texto a traducir :)"></textarea>

			<label for="texto_salida">Texto traducido:</label>

			<textarea id="texto_salida" rows="6" cols="80" class="texto braille"></textarea>

			<input type="button" id="btnLeer" value="texto_salida">
		</div>


<script>
	function enviarTexto(){
			var texto=document.getElementById("texto_entrada").value;
			document.getElementById("texto_salida").value=texto;
	}    

</script>

	<script>

	// $(document).ready(function() {

		$('#uno').mouseover(function() {
			artyom.say("enlace 1")
		});

		$('#uno').mouseout(function() {
			artyom.shutUp();
		});

		$('#dos').mouseover(function() {
			artyom.say("enlace 2")
		});
        
        $('#dos').mouseout(function() {
			artyom.shutUp();
		});

		$('#tres').mouseover(function() {
			artyom.say("enlace 3")
		});
        
    $('#tres').mouseout(function() {
			artyom.shutUp();
		});

		$('#cuatro').mouseover(function() {
			artyom.say("enlace 4")
		});

		$('#cuatro').mouseout(function() {
			artyom.shutUp();
		});

		//El sistema responde
		artyom.addCommands([
			{
				indexes:["buenos días",'cuál es tu banda favorita','Saluda a mis seguidores'],
				action: function(i){
					if (i==0) {
						artyom.say("Hola Como estas, buenos dias");
					}
					if (i==1) {
						artyom.say("Raul, me gusta tu banda BLESS");
					}
					if (i==2) {
						artyom.say("Hola gente, espero les este yendo muy bien y que este tutorial les ayude de mucho. Saludos");
					}
				}
			},
			{
				indexes:['me voy','chau'],
				action: function(){
					alert('ok, chau');					
				}
			},
			{
				indexes:['abrir google','abrir facebook', 'abrir youtube'],
				action: function(i){
					if (i==0) {
						artyom.say("Abriendo google");
						window.open("http://www.google.com",'_blank');
					}
					if (i==1) {
						artyom.say("Abriendo facebook");
						window.open("http://www.facebook.com/intecsolt/",'_blank');
					}
					if (i==2) {
						artyom.say("Abriendo youtube");
						window.open("https://www.youtube.com/channel/UCF721oswf7EUSsQbuGFoMZQ",'_blank');
					}
				}
			},
			{
				indexes:['limpiar'],
				action: function(){
					$('#texto_entrada').val('');
				}
			}
		]); 

		// Escribir lo que escucha.
		artyom.redirectRecognizedTextOutput(function(text,isFinal){
			var texto = $('#texto_entrada');
			if (isFinal) {
				texto.val(text);
			}else{
				
			}
		});




		//inicializamos la libreria Artyom
		function startArtyom(){
			artyom.initialize({
				lang: "es-ES",
				continuous:true,// Reconoce 1 solo comando y para de escuchar
	            listen:true, // Iniciar !
	            debug:true, // Muestra un informe en la consola
	            speed:1 // Habla normalmente
			});
		};
		
		// Stop libreria;
		function stopArtyom(){
			artyom.fatality();// Detener cualquier instancia previa
		};

		// leer texto
		$('#btnLeer').click(function (e) {
            e.preventDefault();
            var btn = $('#btnLeer');
            if (artyom.speechSupported()) {
                btn.addClass('disabled');
                btn.attr('disabled', 'disabled');

                var text = $('#texto_salida').val();
                if (text) {
                    var lines = $("#texto_salida").val().split("\n").filter(function (e) {
                        return e
                    });
                    var totalLines = lines.length - 1;

                    for (var c = 0; c < lines.length; c++) {
                        var line = lines[c];
                        if (totalLines == c) {
                            artyom.say(line, {
                                onEnd: function () {
                                    btn.removeAttr('disabled');
                                    btn.removeClass('disabled');
                                }
                            });
                        } else {
                            artyom.say(line);
                        }
                    }
                }
            } else {
                alert("Tu navegador no puede hablar !");
            }
        });

	// });
	</script>
</body>
</html>