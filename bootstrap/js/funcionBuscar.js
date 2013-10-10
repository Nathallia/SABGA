 function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

//-------------------------------------------------------------------------

//_________________________________________________________________________
function buscarMa(){ //esta es la funcion que envia los datos de manea asincrona
	//div donde  mostrararemos  los datos de la consulta 
	divResultado = document.getElementById('contenidoF');

	//tomamos el valor enviado del formulario de envio
	campoText=document.formulario.campoText.value;
         
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//usamos el medoto POST
	//archivo que realizará la operacion
	ajax.open("POST", "../Controller/PagresultadoController.php",true);
	//mostramos una imagen mientras cargamos el resultado de la consulta
	divResultado.innerHTML= '<img src="images/ajax.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//visualizamos el resultado correscpondiente
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valoress
	ajax.send('campoText='+campoText);
       
}

function datosUsuario(){ //esta es la funcion que envia los datos de manea asincrona
	//div donde  mostrararemos  los datos de la consulta 
	divResultado = document.getElementById('contenidoF');

	//tomamos el valor enviado del formulario de envio
	documento=document.formuUsuario.documento.value;
         
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//usamos el medoto POST
	//archivo que realizará la operacion
	ajax.open("POST", "../Controller/PagUsuarioController.php",true);
	//mostramos una imagen mientras cargamos el resultado de la consulta
	divResultado.innerHTML= '<img src="images/ajax.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//visualizamos el resultado correscpondiente
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valoress
	ajax.send('documento='+documento);
       
}
