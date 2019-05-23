function openWindow(whats){
	$('html, body').animate({scrollTop:0}, 'slow');
	var w=70;
	//var h=700;
	var x=w/2; 
	//var y=h/2;

	$('#backScreen,#window').fadeIn(1000);
	document.getElementById('backScreen').style.display="block";
	document.getElementById('window').style.display="block";
	document.getElementById('window').style.width=w+"%";
	document.getElementById('window').style.height="auto";
	document.getElementById('window').style.marginTop="-"+300+"px";
	document.getElementById('window').style.marginLeft="-"+x+"%";
	//$("html").css("overflow", "hidden");
	$.ajax({
	  url: "../pagination/windowTemas.php?file="+whats,
	  success:function(msj){
		$("#window").html(msj); 
	  }
	}); 
	
}

function closeWin(){
	$('#backScreen, #window').fadeOut(1000);	
	$("html").css("overflow", "auto");	
}

function checkNum(e){
	var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57)
}

function myperfil(){
	$("#perfil option:selected").each(function(){
		idPerfil=$(this).val();
    descp=$(this).text();
       	if (idPerfil != 0) {
       			if (idPerfil == 1) {
       				$("#showForm").html("");
       				$("#loadInput").html('<input class="form-control text-center" id="matricula" name="matricula" placeholder="ingresar matricula" maxlength="10" onKeyPress="return checkNum(event)" required>');
       				$("#loadBtn").html('<button class="btn btn-outline-success" onclick="sendDatasForm()"><span id="gifLoad">Buscar<i class="fa fa-search" aria-hidden="true"></i></span></button>');
       			}else{
       				$.ajax({
								url: "../forms/formRegisterGeneral.php",
								beforeSend: function(){
									$("#loadInput").html("Trabajando en ello... <i class='fa fa-spinner fa-pulse fa-fw'></i>");
								},
								success: function(request){
									$("#loadInput").html("");
									$("#showForm").html(request);
									$("#form_elegirPerfilPersona button").html('Guardar <i class="fa fa-floppy-o" aria-hidden="true"></i>');
					      }
					    });
					  }
							
       	}else {alert("selecciona una opcion"); $("#form_elegirPerfilPersona")[0].reset; $("#loadInput").html(''); $("#showForm").html(""); $("#form_elegirPerfilPersona button").html('Buscar <i class="fa fa-search" aria-hidden="true"></i>');}
	});
}



function sendDatasForm(){

	var array="", elmt=0, i=0, ok=0; 

		$("select, input").each(function(){ // rastreamos los elementos usados dentro de mi formulario
			++elmt; // contamos todos los elementos
			array += $(this).attr("id")+"|"; //identificadors de mis elementos en el form
		});
		id = array.split("|"); //individualizamos los identificadores
			while (i < elmt) { // el bucle depende del numero de los elementos
				if ( $("#"+id[i]).val()=="" || $("#"+id[i]).val()==0){ // buscamos cuando el valor de un elemento x su id es vacio o cero
					$("#"+id[i]).css("border",".5px solid red"); // aca podemos marcar los elementos incorrectos

				}else{ // cuando los elementos recorridos esten completados
					++ok; // hacemos una bandera de los elementos correctos o llenos
					$("#"+id[i]).removeAttr("style"); // y le kitamos el css bordeado o el efecto malo
				}
			i++; // control del bucle
			} // fin del ciclo
		// aki comprobamos y alertamos el error de llenado
		if (ok != elmt) { // si no es igual los elementos aprovados a los reales
			alert("Se detectaron "+(elmt - ok)+" campos incorrectos"); // mostramos el total de campos llenos

		}else{ // aki procederemos con el tratado de la informacion
			console.log("verifico todos bien");

		}
return false;
}


/*
function calcula_edad(element){

	var fecha = $('#anio').val()+"-"+$('#mes').val()+"-"+$('#dia').val();

	var f=fecha.split('-');
	var fa=new Date();
	var edad=fa.getFullYear()-f[0];

		if(f[1]>fa.getMonth()+1)
			edad--;
		if(fa.getMonth()+1==f[1])
			if(f[2]>fa.getDate())
				edad--;

	$("#"+element).val(edad);
}

function comprueba(key,no){
	if (no == 1) {
		if(key >= 0 || key <= 9)
			console.log("dayOK");
		else
			$('#dia').val("");
	}
	else if (no == 2) {
		if(key >= 0 || key <= 9)
			console.log("mesOK");
		else
			$('#mes').val("");
	}
	else if (no == 3){
		if(key >= 0 || key <= 9){
			calcula_edad("edd");
			console.log("aniOK");
		}
		else
			$('#anio').val("");
	}
	else if (no == 4){
		if(key >= 0 || key <= 9)
			console.log("telOK");
		else
			$('#tel').val("");
	}
	else if (no == 5){
		if(key >= 0 || key <= 9)
			console.log("eddOK");
		else
			$('#edd').val("");
	}

}

$("#form_registroPersonas").submit(function(e){
	e.preventDefault();

	alert("as");
return false;
});


/////////////////////////////////// FUNCCION REGISTRO ////////////////////////////////////////
function saveInfoRegister(){
	var action = $("#form_tipoPerfilPersonas #perfil").val();

	if (action == 0) { 
		alert("Elige un tipo de perfil");
		console.log("error");

	}else if(action != 3){ //solo se registra
		console.log("registro");
		//code...
		var strDatas = "action=1&";

		strDatas += $("#form_registroPersonas").serialize() +"&"+ $("#form_tipoPerfilPersonas").serialize();
		//console.log(strDatas);
		$.ajax({
			url: "server/registerNewPeople.php",
			type: "POST",
			data: strDatas,
			beforeSend: function(){
				$("#gifLoad").html("Trabajando en ello... <i class='fa fa-spinner fa-pulse fa-fw'></i>");
			},
			success: function(request){
				console.log(request); //
				if (request=="exito") {
					alert("Registro Guardado");
					closeWin();

				}else if (request=="error_fec") {
					$("#dia").focus();
					alert("Ingresa la fecha de nacimiento correctamente");
					$("#gifLoad").html("Guardar");

				}else if(request=="error_name"){
					$("#nombres").focus();
					alert("Ingresa el nombre o apellidos correctamente");
					$("#gifLoad").html("Guardar");

				}else if(request=="error_reg"){
					$("#form_registroPersonas")[0].reset();
					alert("Se encontro un registro existente");
					$("#gifLoad").html("Guardar");
					$("#form_registroPersonas #nombres").focus();
				}

			}

		});

	}else{ //para crear una cuenta
		console.log("cuenta");
		//code...
		var strDatas = "action=2&";
		strDatas += $("#form_registroPersonas").serialize() +"&"+ $("#form_crearCuentaLogin").serialize()  +"&"+ $("#form_tipoPerfilPersonas").serialize();
			//console.log(strDatas);
		$.ajax({
			url: "server/registerNewPeople.php",
			type: "POST",
			data: strDatas,
			beforeSend: function(){
				$("#gifLoad").html("Trabajando en ello... <i class='fa fa-spinner fa-pulse fa-fw'></i>");
			},
			success: function(request){
				console.log(request); //
				if (request=="exito") {
					alert("Registro Guardado");
					closeWin();

				}else if (request=="error_cue") {
					$("#nick").focus();
					alert("Ingresa los datos de la cuenta correctamente");
					$("#gifLoad").html("Guardar");

				}else if (request=="error_fec") {
					$("#dia").focus();
					alert("Ingresa la fecha de nacimiento correctamente");
					$("#gifLoad").html("Guardar");

				}else if(request=="error_name"){
					$("#nombres").focus();
					alert("Ingresa el nombre o apellidos correctamente");
					$("#gifLoad").html("Guardar");

				}else if(request=="error_reg"){
					$("#form_registroPersonas")[0].reset();
					alert("Se encontro un registro existente");
					$("#gifLoad").html("Guardar");
					$("#form_registroPersonas #nombres").focus();
				}

			}

		});

		
	}
}

///////////////////////////// AUTHENTIC ACCOUNT ///////////////////////////////

function authAccountUser(){
	console.log("authUser");

	var strDatas = "";
		strDatas = $("#form_authCuentaLogin").serialize();

	$.ajax({
		url: "server/authenticAccount.php",
		type: "POST",
		data: strDatas,
		beforeSend: function(){
			$("#gifLoad").html("Trabajando en ello... <i class='fa fa-spinner fa-pulse fa-fw'></i>");
		},
		success: function(request){
			console.log(request); 
			if (request=="exito") {
				alert("Bienvenido");
				closeWin();
				//se redireccionara modo admin window.open()

			}else{
				$("#nick").focus();
				alert("Ingresa los datos de la cuenta correctamente");
				$("#gifLoad").html("Acceder");

			}
		}

	});

}*/