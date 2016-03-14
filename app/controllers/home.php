<?php
	
class Home extends Controller{
	protected $model;
	protected $view;
	
	function __construct($params){
		parent::__construct($params);
		$this->model=new mHome();
		$this->view=new vHome(null);
	}

	function home(){
	}

	function login(){			
		if(isset($_POST['usuari'])){
			$usuari=filter_input(INPUT_POST, '', FILTER_SANITIZE_STRING);
			$contrasena=filter_input(INPUT_POST, 'contrasenya', FILTER_SANITIZE_STRING);
			// $contrasena=md5(filter_input(INPUT_POST, 'contrasena', FILTER_SANITIZE_STRING)); 
			$user=$this->model->login($usuari,$contrasena);
			if ($user==TRUE){
				Session::set('islogged',TRUE);
       			Session::set('nom',$usuari);
				$output=array('redirect'=>APP_W);
				$this->ajax_set($output);
			}else{ 
				Session::set('islogged',False);
				Session::set('nom',"");
				$output=array('redirect'=>APP_W.'register');
				$this->ajax_set($output);
			}
		}
	}

	function desconectar(){
		Session::set('islogged',False);
		Session::set('nom',"");
		header('Location: home');
	}
	
}
