<!DOCTYPE html>
<html >
    <head>
        <!-- META -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- LINK -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
		<style>
			body {
			display: flex;
			min-height: 100vh;
			flex-direction: column;
			}
			main {
			flex: 1 0 auto;
			}
			body {
			background: #fff;
			}
			.input-field input[type=date]:focus + label,
			.input-field input[type=text]:focus + label,
			.input-field input[type=email]:focus + label,
			.input-field input[type=password]:focus + label {
			color: #e91e63;
			}
			.input-field input[type=date]:focus,
			.input-field input[type=text]:focus,
			.input-field input[type=email]:focus,
			.input-field input[type=password]:focus {
			border-bottom: 2px solid #e91e63;
			box-shadow: none;
			}
		</style>
        <!-- TITLE -->
        <title>Ingresar a Emmanuel Salazar</title>
    </head>
    <body>
	        <nav class="navbar navbar-default navbar-fixed-top light-blue darken-3">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="http://www.emmanuelsalazar.com" style="color: #FFCE00;">
                    Emmanuel Salazar
                    </a>
                </div>
            </div>
        </nav>
		<div class="section" style="padding-top:60px;"></div>
		<main>
			<center>
				<h5 class="indigo-text">Ingrese sus credenciales</h5>
				<div class="section red-text">
				<?php
					if( $_GET['status'] == 'success'):
						echo 'Felicidades, nuevo usuario creado.';
					endif;	
					if( $_GET['status'] == 'error'):
						echo 'No existen usuarios con el email y contrase&ntilde;a ingresados';
					endif;	
					
				?>
				</div>
				<div class="container">
					<div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
						<form class="col s12" action="loginuser.php" method="post">
							<div class='row'>
								<div class='col s12'>
								</div>
							</div>
							<div class='row'>
								<div class='input-field col s12'>
									<input class='validate' type='email' name='email' id='email' style="text-align: left"/>
									<label for='email'>Email</label>
								</div>
							</div>
							<div class='row'>
								<div class='input-field col s12'>
									<input class='validate' type='password' name='password' id='password' />
									<label for='password'>Contrase&ntilde;a</label>
								</div>
							</div>
							<br />
							<center>
								<div class='row'>
									<button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Ingresar</button>
								</div>
							</center>
						</form>
					</div>
				</div>
				<a href="newuser.php">Crear cuenta</a>
			</center>
			<div class="section"></div>
			<div class="section"></div>
		</main>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>