<section class="containerB containerRegistro">
	<form class="ajaxRegister" name="formlog" method="post" action="<?= APP_W.'register/registro'; ?>"> 	
		<div class="inner-addon left-addon">
	      	<i class="glyphicon glyphicon-user"></i>  
      		<input type="text" class="form-control" placeholder="Usuari" required/>
	    </div>
	    
	    <div class="inner-addon left-addon">
	      	<i class="glyphicon glyphicon-lock"></i>  
      		<input type="password" class="form-control" placeholder="Contrasenya"  required/>
	    </div>
		<div class="inner-addon">
			<input type="submit" value=" Crear compte" id="btnRegistro">
		</div>
		<div class="inner-addon"></div>
	</form>
	<div id="mensajeRegistro"></div>
	
	
	</div>

</section>