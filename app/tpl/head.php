<?php
	header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
    <link href="<?= APP_W.'pub/css/reset.css'; ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= APP_W.'pub/css/m.css'; ?>">
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="<?= APP_W.'pub/js/app.js'; ?>"></script>

</head>
<body>
	
	<header class="contenidor1">
		<span>
		<h1><a href="<?=APP_W; ?>"><?= $title; ?></a></h1>	
		<form class="ajaxLogin" name="formlog" method="post" action="<?= APP_W.'home/login'; ?>"> 	
			<?php 
				if( (isset($_SESSION['islogged'])) && ($_SESSION['islogged']!="") ){
					echo '<div class="inner-addon">
						<span>Bienvenido, '.$_SESSION['nombre'].'</span>
					</div>
				    <div class="inner-addon">
						<a href="'.APP_W.'home/desconectar"><input type="button" value="Desconectar" id="btnDesconectar"></a>
					</div>';
				}else{
					echo '<div class="inner-addon left-addon">
				      	<i class="glyphicon glyphicon-user"></i>  
			      		<input type="text" class="form-control" placeholder="Usuari" name="" required/>
				    </div>

				    <div class="inner-addon left-addon">
				      	<i class="glyphicon glyphicon-lock"></i>  
			      		<input type="password" class="form-control" placeholder="Contrasenya" name="" required/>
				    </div>
					<div class="inner-addon">
						<input type="submit" value="Entrar" id="logsend">
					</div>
					<div class="inner-addon">
						<a href="'.APP_W.'register"><input type="button" value="Registre" id="btnRegistro"></a>
					</div>';
				}
		    ?>
		    
		</form>	
		</span>
	</header>
	