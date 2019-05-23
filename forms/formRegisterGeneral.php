<?php include("../server/getInformation.php"); ?>

<form id="form_datosPersonalesRegistro">
	<h6 style="border-bottom: solid #357FDB .5px;">Escolar</h6>

	<div class="form-group row">
	  <label class="col-2 col-form-label">Carrera</label>
	  <div class="col-10">
	    <select class="form-control" id="carrera" name="carrera" required>
	      <?php echo $option2; ?>
	    </select>
	</div>
	</div>

	<h6 style="border-bottom: solid #357FDB .5px;">Datos Personales</h6>

	<div class="form-group row">
	  <label for="example-text-input" class="col-2 col-form-label">Nombre(s)</label>
	  <div class="col-10">
	    <input class="form-control" id="nombres" name="nombres" required>
	  </div>
	</div>
	
	<div class="form-group row">
	  <label for="example-email-input" class="col-2 col-form-label">Apellido</label>
	  <div class="col-10">
	    <input class="form-control" id="paterno" name="paterno" placeholder="Paterno" required>
	  </div>
	</div>

	<div class="form-group row">
	  <label for="example-email-input" class="col-2 col-form-label">Apellido</label>
	  <div class="col-10">
	    <input class="form-control" id="materno" name="materno" placeholder="Materno" required>
	  </div>
	</div>

	<div class="form-group row">
	  <label for="example-email-input" class="col-2 col-form-label">Edad</label>
	  <div class="col-2">
	    <input maxlength="2" class="form-control" name="edad" id="edd" onKeyPress="return checkNum(event)" required>
	  </div>
	</div>

	<div class="form-group row">
	  <label for="example-tel-input" class="col-2 col-form-label">Email</label>
	  <div class="col-10">
	    <input type="email" class="form-control" name="email" id="email" placeholder="correo verdadero" required>
	  </div>
	</div>	

	<div class="form-group row">
	  <label for="example-tel-input" class="col-2 col-form-label">Celular</label>
	  <div class="col-10">
	    <input type="telefono" maxlength="10" class="form-control" name="celular" id="cel" onKeyPress="return checkNum(event)" placeholder="numero de telefono" required>
	  </div>
	</div>	
	
	<div class="form-group row">
    <label class="col-2 col-form-label" >Genero</label>
    <div class="col-10">
	    <select class="form-control" id="genero" name="genero" required>
	      <option value="0">-- Seleccionar --</option>
	      <option value="H">Másculino</option>
	      <option value="M">Femenino</option>
	      <option value="I">Indistinto</option>
	    </select>
	 </div>
  </div>

	<div class="form-group row">
    <label class="col-2 col-form-label">Residencia</label>
    <div class="col-10">
	    <select class="form-control" id="estado" name="estado" required>
	      <?php echo $option3; ?>
	    </select>
	</div>
  </div>
</form> 

