<!-- Modal Registro-->
<section>

	<div style="width: 100%; height: 38px; border-bottom: solid #ccc .5px;">
		<button type="button" class="btn btn-outline-danger" style="float:right;" onclick="closeWin()">
			<i class="fa fa-times"></i>
		</button>
		<h5 style="margin-left: 5px; margin-top: 10px; position: absolute;">Iniciar Sesión</h5>
	</div>
	<p>
	
	<div class="container">

		<form id="form_authCuentaLogin" >

			<h6 style="border-bottom: solid #357FDB .5px;">Cuenta Usuario</h6>
			<br>
			<div class="form-group row">
			  <label for="example-text-input" class="col-4 col-form-label">Usuario</label>
			  <div class="col-8">
			    <input class="form-control" id="nick" name="nick" placeholder="ingrese usuario">
			  </div>
			</div>
			
			<div class="form-group row">
			  <label for="example-password-input" class="col-4 col-form-label">Contraseña</label>
			  <div class="col-8">
			    <input class="form-control" name="pswd" type="password" placeholder="ingrese contraseña">
			  </div>
			</div>
		</form>

		<h6 style="border-bottom: solid #357FDB .5px;"></h6>
		<br>
		<center>
			<button title="guardar" class="btn btn-outline-warning" onclick="authAccountUser()">
				<span id="gifLoad">Acceder
				<i class="fa fa-lock" aria-hidden="true"></i>
				</span>
			</button>
		</center>

	</div>
		  
</section>
