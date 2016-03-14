<?php

class mHome extends Model{

	function __construct(){
		parent::__construct();
		
	}

	function login($usuari,$contrasenya){
		try{
			$sql="SELECT id FROM usuaris WHERE email=? AND contrasenya=?";
			$this->Query($sql);
			$this->Bind(1,$usuari);
			$this->Bind(2,$contrasenya);
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