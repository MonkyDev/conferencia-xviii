$(document).ready(function(){

	/*$("#showPags").html('<video height="100%" width="100%" autoplay="on" preload="auto" controls><source src="../media/spot/spotExpoORG.mp4" type="video/mp4"></video>');
	// carga el  carrusel despues del vidio
	setTimeout(function(){
		$.ajax({
			url: "../pagination/inicio.php",
			beforeSend:function(){
				$("#showPags").html("Trabajando en ello... <i class='fa fa-spinner fa-pulse fa-fw'></i>");
			},
			success: function(req){
				$('html, body').animate({scrollTop:160}, 'slow');
				$("#showPags").html(req);
			}
		});
	}, 25000);*/

	

	/*$.ajax({ // esto descomentar
		url: "../pagination/inicio.php",
		beforeSend:function(){
			$("#showPags").html("Trabajando en ello... <i class='fa fa-spinner fa-pulse fa-fw'></i>");
		},
		success: function(req){
			$('html, body').animate({scrollTop:160}, 'slow');
			$("#showPags").html(req);
			$(".btn-video").click();
		}
	});*/

	$("#temas").on("click", function(){
		$.ajax({
			url: "../pagination/temasExpo.php",
			beforeSend:function(){
				$("#showPags").html("Trabajando en ello... <i class='fa fa-spinner fa-pulse fa-fw'></i>");
			},
			success: function(req){
				//console.log("OK");
				$("#showPags").html(req);
			}
		});
	});

	$("#carreras").on("click", function(){
		$.ajax({
			url: "../pagination/infoCarreras.php",
			beforeSend:function(){
				$("#showPags").html("Trabajando en ello... <i class='fa fa-spinner fa-pulse fa-fw'></i>");
			},
			success: function(req){
				//console.log("OK");
				$("#showPags").html(req);
			}
		});
	});


	$("#registra").on("click", function(){

		$('html, body').animate({scrollTop:0}, 'slow');
		var w=50;
		//var h=80;
		var x=w/2;
		//var y=h/2;

		$('#backScreen,#window').fadeIn(1000);
		document.getElementById('backScreen').style.display="block";
		document.getElementById('window').style.display="block";
		document.getElementById('window').style.width=w+"%";
		document.getElementById('window').style.height="auto";
		document.getElementById('window').style.marginTop="-"+30+"%";
		document.getElementById('window').style.marginLeft="-"+x+"%";
		//$("html").css("overflow", "hidden");
		$.ajax({
		  url: "../forms/modalFormRegister.php",
		  success:function(msj){
			$("#window").html(msj); 
		  }
		}); 
	});

}); //end Document JS