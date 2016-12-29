<!DOCTYPE html>
<html >
    <head>
        <!-- META -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- LINK -->
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
			.input-field input[type=text]:focus + label,
			.input-field input[type=password]:focus + label {
			color: #e91e63;
			}
			.input-field input[type=text]:focus,
			.input-field input[type=password]:focus {
			border-bottom: 2px solid #e91e63;
			box-shadow: none;
			}
		</style>
        <!-- TITLE -->
        <title>Crear nuevo usuario</title>
    </head>
    <body>
		<div class="section"></div>
		<main>
			<center>
				<h5 class="indigo-text">Crear nuevo usuario</h5>
				<div class="section"></div>
				<div class="container">
					<div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 70px 0px 70px; border: 1px solid #EEE;">
						<form class="col s12" action="create.php" method="post">
							<div class='row'>
								<div class='col s12'>
								</div>
							</div>
							<div class='row'>
								<div class='input-field col s12'>
									<input class='validate' type='text' name='name' id='name' style="text-align: left"/>
									<label for='name'>Nombre</label>
								</div>
							</div>
														<div class='row'>
								<div class='input-field col s12'>
									<input class='validate' type='text' name='lastname' id='lastname' style="text-align: left"/>
									<label for='lastname'>Apellido</label>
								</div>
							</div>
							<div class='row'>
								<div class='input-field col s12'>
									<input class='validate' type='text' name='email' id='email' style="text-align: left"/>
									<label for='email'>Email</label>
								</div>
							</div>
							<div class='row'>
								<div class='input-field col s12'>
									<input class='validate' type='password' name='password' id='password' />
									<label for='password'>Contrase&ntilde;a</label>
								</div>
							</div>
														<div class='row'>
								<div class='input-field col s12'>
									<input class='validate' type='password' name='re_password' id='re_password' />
									<label for='re_password'>Re ingrese contrase&ntilde;a</label>
								</div>
							</div>
							<br />
							<center>
								<div class='row'>
									<button type='submit' name='btn_create' class='col s12 btn btn-large waves-effect indigo'>Crear nuevo</button>
								</div>
							</center>
						</form>
					</div>
				</div>
			</center>
			<div class="section"></div>
			<div class="section"></div>
		</main>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    </body>
</html>