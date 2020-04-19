
$(document).ready(function(){

	$("#btn_voz").click(press_btnvoz);

});

let rec;

function press_btnvoz(){

	
	 if (!("webkitSpeechRecognition" in window)) {
		  alert("disculpas, no puedes usar el comando de voz");
	} else {
		   rec = new webkitSpeechRecognition();
		   rec.lang = "es-AR";
		   rec.continuous = true;
		   rec.interim = true;
		   rec.addEventListener("result",iniciar);
	}
		    
		   rec.start();
		   return false;
}


function iniciar(event){
	for (let i = event.resultIndex; i < event.results.length; i++){
         document.getElementById('texto').innerHTML = event.results[i][0].transcript;
	}
}

