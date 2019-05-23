<!-- Modal Registro-->
<?php include("../server/getInformation.php"); ?>
<section>

	<div style="width: 100%; height: 38px; border-bottom: solid #ccc .5px;">
		<button type="button" class="btn btn-outline-danger" style="float:right;" onclick="closeWin()">
			<i class="fa fa-times"></i>
		</button>
		<h5 style="margin-left: 5px; margin-top: 10px; position: absolute;">Registrarme</h5>
	</div>
	<p>
	
	<div class="container">
		
		<form id="form_elegirPerfilPersona">
		
			<h6 style="border-bottom: solid #357FDB .5px;">Elegir Mi Perfil</h6>

			<div class="form-group row">
		    <label class="col-2 col-form-label">Soy</label>
		    <div class="col-10">
			    <select class="form-control" id="perfil" name="perfil" onchange="myperfil()" required>
			     <?php echo $option; ?>
			    </select>
			</div>
		  </div>

		  <div class="form-group row"><div class="col-6 mx-auto" id="loadInput"></div></div>

		  <div id="showForm"></div>

			<h6 style="border-bottom: solid #357FDB .5px;"></h6>

			 <div class="form-group row"><div class="col"><center id="loadBtn"></center></div></div>
			<br>
		</form>

	</div>
		  
</section>
