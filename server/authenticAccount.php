<?php
session_start(); 
date_default_timezone_set("America/Mexico_City");
	include("../database/classParamsDB.php");
	include("../database/classConexionDB.php");
	include("../database/classCommandsDB.php");

$exe = new classCommandsDB();

if(isset($_POST) && !empty($_POST)){ extract($_POST);
	
	if (!empty($nick) && !empty($pswd)) {

		$sql="SELECT nick,pswd,atv,fk_cliente FROM tbl_usuarios WHERE nick='".mysql_real_escape_string($_POST['nick'])."' ";
		$result=$exe->executeQuery($sql);
		$reg=$exe->getNRows($result);
		if($reg < 1){
			echo "User_fail";
		}else{
			$row=$exe->getRows($result);
			if($row['nick']==$_POST['nick'] && $row['pswd']==md5($_POST['pswd']) && $row['atv']==1){ 
			
				$sql1="SELECT nombre FROM cat_clientes WHERE pk_cliente =".$row['fk_cliente'] ;
				$result1=$exe->executeQuery($sql1);
				$reg1=$exe->getNRows($result1);
				if($reg1 >= 1){
					$row1=$exe->getRows($result1);
					$_SESSION['namePerson']=$row1['nombre'];
					$_SESSION['account']=$row['nick'];
					echo "exito";
				}							
						
			}
			else if($row['nick']==$_POST['nick'] && $row['pswd']!= md5($_POST['pswd']) ){
				echo "user_fake"; #usuario incorrecto
			}
			else if($row['pswd']!= md5($_POST['pswd']) ){
				echo "pass_fake"; #contraseña incorrecta
			} 
		}

	}else 
		echo 'error_var';
	
		 
}
