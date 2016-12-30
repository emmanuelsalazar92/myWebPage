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
        <title>Emmanuel Salazar</title>
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
				<div class="section green-text">
				<?php
					if( $_GET['status'] == 'success'):
						echo 'Bienvenido al sistema';
					endif;			
				?>
				</div>

			</center>
			<div class="section"></div>
			<div class="section"></div>
		</main>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>