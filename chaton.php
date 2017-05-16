<?php 
session_start();

if (!empty($_SESSION['email'])) { ?>
<!doctype html>
<html>
<head>
	<meta charset='UTF-8' />
	
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  	<!--Let browser know website is optimized for mobile-->
  	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="fancywebsocket.js"></script>
	<script>
		var Server;

		function log( text ) {
			$log = $('#log');
			//Add text to log
			$log.append(($log.val()?"\n":'')+text);
			//Autoscroll
			$log[0].scrollTop = $log[0].scrollHeight - $log[0].clientHeight;
		}

		function send( text ) {
			Server.send( 'message', text );
		}

		$(document).ready(function() {
			log('Connecting...');
			Server = new FancyWebSocket('ws://127.0.0.1:9300');

			$('#message').keypress(function(e) {
				if ( e.keyCode == 13 && this.value ) {
					log( 'You: ' + this.value );
					send( this.value );

					$(this).val('');
				}
			});

			//Let the user know we're connected
			Server.bind('open', function() {
				log( "Connected." );
			});

			//OH NOES! Disconnection occurred.
			Server.bind('close', function( data ) {
				log( "Disconnected." );
			});

			//Log any messages sent from server
			Server.bind('message', function( payload ) {
				log( payload );
			});

			Server.connect();
		});
	</script>
</head>

<body>

	<nav>
    	<div class="nav-wrapper">
      		<a href="#" class="brand-logo">Logo</a>
      		<ul id="nav-mobile" class="right hide-on-med-and-down">
        		<li><a href="sass.html">Sass</a></li>
        		<li><a href="badges.html">Components</a></li>
        		<li><a href="collapsible.html">JavaScript</a></li>
      		</ul>
    	</div>
  	</nav>
	
	<h1> <?php echo $_SESSION['email']; ?> </h1>

	<div id='body'>
		<textarea id='log' name='log' readonly='readonly'></textarea><br/>
		<input type='text' id='message' name='message' />
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   
  	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>

<?php }else {?>
<h1>No has iniciado session </h1>
<?php }?>
