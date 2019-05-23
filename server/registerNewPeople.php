<?php
echo 1;
/*date_default_timezone_set("America/Mexico_City");
	include("../database/classParamsDB.php");
	include("../database/classConexionDB.php");
	include("../database/classCommandsDB.php");

$exe = new classCommandsDB();

if(isset($_POST) && !empty($_POST)){ extract($_POST);
	
	$rfc = strtoupper(substr($paterno,0,2).substr($materno,0,2).substr($nombres,0,2).substr($anio,0,2).$mes.$dia);
	$birthday = $anio."-".$mes."-".$dia;
	if (strlen($birthday) < 10){
		echo "error_fec";

	}else if (!empty($paterno) || !empty($materno) || !empty($nombres)) {
		
		$sql = "SELECT rfc FROM cat_clientes WHERE rfc = '".$rfc."' ";
		$result = $exe->executeQuery($sql);
		$row = $exe->getNRows($result);
		$registrado = $row;
		if ($registrado >= 1 ) {
			echo "error_reg";

		}else {
			switch ($action) {
		 		case 1:
		 			$sql = "INSERT INTO cat_clientes VALUES (
		 			'NULL',
		 			'".$rfc."',
		 			'".$nombres."',
		 			'".$paterno."',
		 			'".$materno."',
		 			'".$birthday."',
		 			".$edad.",
		 			'".$genero."',
		 			".$celular.",
		 			".$perfil.",
		 			'".$carrera."',
					1
		 			)";
		 			if ($exe->executeQuery($sql)) 
		 				echo "exito";
		 				
		 		break;
		 		
		 		case 2:
		 			$sql = "SELECT nick FROM tbl_usuarios WHERE nick = '".$nick."' ";
					$result = $exe->executeQuery($sql);
					$row = $exe->getNRows($result);
					$userOk = $row;
					if ($userOk >= 1 ) {
						echo "error_cue";

					}else {
						$sql = "INSERT INTO cat_clientes VALUES (
			 			'NULL',
			 			'".$rfc."',
			 			'".$nombres."',
			 			'".$paterno."',
			 			'".$materno."',
			 			'".$birthday."',
			 			".$edad.",
			 			'".$genero."',
			 			".$celular.",
			 			".$perfil.",
			 			'".$carrera."',
						1
			 			)";
		 				if ($exe->executeQuery($sql)){ 
			 				$thisRow = $exe->id_ultimo();
			 				$sql = "INSERT INTO tbl_usuarios VALUES (
				 			'NULL',
				 			'".$nick."',
				 			'".trim(md5($pswd))."',
				 			'".date('Y-m-d')."',
							1,
							".$thisRow."
				 			)";
				 			if ($exe->executeQuery($sql))
				 				echo "exito";
				 		}
					}
		 		break;
		 		
		 	}
		}
		
	}else {
		echo "error_name";
	}  		 	

}
*/