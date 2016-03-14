	<div class="containerB">

	
<article class="containerUsuarios">
			<div>
				<p>Bienvenido, anónimo</p>
			</div>
			<div>
				<a href="#">Register</a>
			</div>		
			<?php
				/*
				if(isset($_SESSION['islogged']) && $_SESSION['islogged']==true){
					echo '<p>Bienvenido, '.$_SESSION['nombre'].'</p>';
				}else{
					echo '<p>Bienvenido, anónimo</p>';
				}
				*/
			?>
		</article>

		
		<article class="containerAnuncios">
			<?php
				/*
				if(isset($_SESSION['islogged']) && $_SESSION['islogged']==true){
					echo '<p>Bienvenido, '.$_SESSION['nombre'].'</p>';
				}else{
					echo '<p>Bienvenido, anónimo</p>';
				}
				*/
			?>
		</article>
		

		
		<article class="containerLogin">
			<form class="ajax" name="formlog" method="post" action="<?= APP_W.'home/login'; ?>">
				<label>email<input type="text" name="email" value="" placeholder="" ></label>
				<label>password<input type="password" name="password" ></label>
				<input type="submit" value="Entra" id="logsend">
			</form>

			<form action="<?= APP_W.'home/login'; ?>" method="post">
				<div>Usuari:</div> 
				<div><input type="text" name="nombre"></div>
				<div>Contrasenya:</div> 
				<div><input type="text" name="contrasenya"></div>
				<div><input type="submit" value="Login"></div>
			</form>

		</article>
		</div>