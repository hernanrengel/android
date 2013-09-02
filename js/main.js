function objetoAjax()
{
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

function altaPersona(){
    var nombre = document.miForm.nombre.value;
    var apellidos = document.miForm.apellidos.value;
    var	correo = document.miForm.correo.value;
    var telefono = document.miForm.telefono.value;	
    var institucion = document.miForm.institucion.value;	
    var departamento = document.miForm.departamento.value;

    var ajax=new objetoAjax();
    ajax.open("POST","core/alta.php","true");
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4){
           // var res=ajax.responseText;
            alert("Gracias por Registrarse con nosotros, sus datos fueron guardados Exitosamente!");
        }
    }
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    var consulta = ajax.send("nombre="+nombre+"&apellidos="+apellidos+"&correo="+correo+"&telefono="+telefono+"&institucion="+institucion+"&departamento="+departamento);
    //console.log(consulta);
}

function altaComentario(){
    var nombrec = document.contactForm.nombrec.value;
	var correoc = document.contactForm.correoc.value;
	var comentc = document.contactForm.comentc.value;

	console.log(nombrec+correoc+comentc);

    var ajax = new objetoAjax();
    ajax.open("POST","core/altaComent.php","true");
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4){
           // var res=ajax.responseText;
            alert("Gracias su consulta sera respondida a la Brevedad Posible");
        }
    }
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    var inserta = ajax.send("nombrec="+nombrec+"&correoc="+correoc+"&comentc="+comentc);
    //console.log(inserta);
}


