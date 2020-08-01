// JavaScript Document

var objXHR; 
//Funcion para crear objeto
function inicializa_xhr()
{
	if(window.XMLHttpRequest)
	{
		objXHR=new XMLHttpRequest();
		//Navegador Microsoft
	}else if(window.ActiveXObject)
	{
		objXHR=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	return objXHR;
}


//Forma cadenas (Variable y valor)
function crearCadena(){
}

//Utilizaremos en los archivos la fn ver();
//variables: 
//control:
//id:
//archivo:
function ver(variables,tipoHTML,id,archivo){
	
	objXHR=inicializa_xhr();
	laCadena="variable4=45445";
	objXHR.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	objXHR.onreadystatechange=procesaRespuesta;
	URL="http://localhost/prueba/"+archivo;
	objXHR.open("POST", URL, true);
	objXHR.send(cadena);
	
	
	//alert(objXHR);
	
	function procesaRespuesta(){
		if(objXHR.readyState==4)
		{
			if(objXHR.status==200)
			{
				document.getElementById("rpt").innerHTML=objXHR.responseText;
			}
		}		
	}
	
}