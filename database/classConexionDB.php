<?php
class classConexionDB{
	# declare variables
	private $_conex;
	
	public function conexionDB(){
		
		$this->_conex = mysql_connect(paramsDB::DB_HOST, paramsDB::DB_USER, paramsDB::DB_PASS) or die('_error: '.mysql_error());
    	if(!mysql_select_db(paramsDB::DB_NAME, $this->_conex)){
    		return FALSE;
    	}else {
    		@mysql_query(paramsDB::DB_CHARACTERS, $this->_conex);
			return $this->_conex;
    	}
	}
}#Fin de la clase conexion


	
