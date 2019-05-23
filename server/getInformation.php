<?php 
date_default_timezone_set("America/Mexico_City");
	include("../database/classParamsDB.php");
	include("../database/classConexionDB.php");
	include("../database/classCommandsDB.php");

$apidb = new classCommandsDB(); 

$sql="SELECT * FROM cat_perfiles WHERE activo = 1";
$result = $apidb->executeQuery($sql);
$option = '<option value="0">-- Seleccionar --</option>';
while ($row = $apidb->getRows($result) ): extract($row);
    $option .= '<option value="'.$pk_perfil.'">'.$descripcion.'</option>';
endwhile;


$sql1="SELECT * FROM cat_carreras WHERE use_car = 1";
$result1 = $apidb->executeQuery($sql1);
$option2 = '<option value="0">-- Seleccionar --</option>';
while ($row1 = $apidb->getRows($result1) ): extract($row1);
    $option2 .= '<option value="'.$pk_carrera.'">'.$nom_car." ".$modalidad.'</option>';
endwhile;

$sql2="SELECT * FROM cat_estados WHERE use_edo = 1";
$result2 = $apidb->executeQuery($sql2);
$option3 = '<option value="0">-- Seleccionar --</option>';
while ($row2 = $apidb->getRows($result2) ): extract($row2);
    $option3 .= '<option value="'.$pk_estado.'">'.$descp_edo.'</option>';
endwhile;