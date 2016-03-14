<?php

class mRegister extends Model{

	function __construct(){
		parent::__construct();
		
	}
	
	function registro($nom, $contrasena, $rol){
		try{
			// $this->Query("INSERT INTO usuaris (email, contrasena, rol) VALUES (?,?,?)");
			$this->Query("CALL sp_new_user(?,?,?)");
			$this->Bind(1,$nom);
			$this->Bind(2,$contrasena);
			$this->Bind(3,$rol);
			$this->Execute();
			return $this->errorCode();
		}catch(PDOException $e){
			echo "Error: ".$e->getMessage();
		}
	}

	function comprobarNombre($nom){
		try{
			$this->Query("SELECT id FROM usuaris where email=?");
			$this->Bind(1,$nom);
			$this->Execute();
			if($this->RowCount()==1){
				return TRUE;
			}else{
				return FALSE;
			}
		}catch(PDOException $e){
			echo "Error: ".$e->getMessage();
		}
	}	

}
