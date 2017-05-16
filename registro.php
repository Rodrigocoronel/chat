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
      <form class="col s12" action="insertar_registro.php" method="post">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Placeholder" id="first_name" name="nombres" type="text" class="validate">
            <label for="first_name">Nombres</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" name="apellidos" type="text" class="validate">
            <label for="last_name">Apellidos</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="password" name="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
              <input id="email" name="email" type="email" class="validate">
              <label for="email">Correo electronico</label>
            </div>
        </div>
        <div class="row">
          <div class="input-field col s6">               
            <button class="btn waves-effect waves-light" type="submit" name="login">Enviar
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


