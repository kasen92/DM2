<?php
	
class Register extends Controller{
	protected $model;
	protected $view;
	
	function __construct($params){
		parent::__construct($params);
		$this->model=new mRegister();
		$this->view=new vRegister(null);
	}

	function home(){

	}
	
	function registro(){
		if(isset($_POST['usuari']) && isset($_POST['contrasena'])){
			$usuari=filter_input(INPUT_POST, 'usuari', FILTER_SANITIZE_STRING);
			$contrasena=filter_input(INPUT_POST, 'contrasena', FILTER_SANITIZE_STRING);
			// $contrasena=md5(filter_input(INPUT_POST, 'contrasena', FILTER_SANITIZE_STRING)); 
			
			$existeusuari=$this->model->comprobarNombre($usuari);
			if(!$existeusuari){
				$user=$this->model->registro($usuari,$contrasena,2);
				if($user=='00000'){
					//ErrorCode no devuelve ningun error
					Session::set('islogged',TRUE);
       				Session::set('nombre',$nombre);
       				$output=array('registro'=>true);
				}else{
					$output=array('registro'=>false);
					$output+=array('msg'=>'Error');
				}
			}else{
				$output=array('registro'=>false);
				$output+=array('msg'=>'Ja en us');
			}

			$output+=array('redirect'=>APP_W);
			$this->ajax_set($output);
		}
	}

}