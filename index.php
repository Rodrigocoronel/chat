<?php
session_start();
?>
<!DOCTYPE html>
	<html>
    <head>
      	<!--Import Google Icon Font-->
      	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<!--Import materialize.css-->
      	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      	<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
	    <div class="row">
    		<form class="col s10" action="login.php" method="post">
      			<div class="row">
        			<div class="input-field col s6">
          				<input placeholder="Introduce tu correo electronico" id="email" type="text" name="email" class="validate">
          				<label for="email">Correo electronico</label>
        			</div>
        		</div>
        		<div class="row">
        			<div class="input-field col s6">
          				<input placeholder="Introduce tu contraseña" id="password" name="password" type="password" class="validate">
          				<label for="password">Contraseña</label>
        			</div>
        		</div>
        		<div class="row">
        				<div class="input-field col s12">
          					<button class="btn waves-effect waves-light" type="submit" name="login">Iniciar Sesión
    						<i class="material-icons right">person_pin</i>
  							</button>
  							<button class="btn waves-effect waves-light" type="submit" name="action" formaction="registro.php">Registrarse
    						<i class="material-icons right">send</i>
        					</button>
        				</div>
        		</div>
        	</form>
        </div>
      	<!--Import jQuery before materialize.js-->
      	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      	<script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>
