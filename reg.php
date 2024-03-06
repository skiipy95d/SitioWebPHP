<?php

	//conexion con la base de datos
	$conex = mysqli_connect("127.0.0.1","root","1234","formulario") or die("<h2>No se encuentra el servidor</h2>");
	
	if (isset($_POST['register'])) {
		if (strlen($_POST['usuario']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1) {
			$usuario = trim($_POST['usuario']);
			$email = trim($_POST['email']);
			$password = trim($_POST['password']);
			$consulta = "INSERT INTO datos('usuario', 'email', 'password') VALUES ('$name','$email','$password')";
			$resultado = mysqli_query($conex,$consulta);
			if ($resultado) {
				?> 
				<h3 class="ok">¡Te has inscripto correctamente!</h3>
			   <?php
			} else {
				?> 
				<h3 class="bad">¡Ups ha ocurrido un error!</h3>
			   <?php
			}
		}   else {
				?> 
				<h3 class="bad">¡Por favor complete los campos!</h3>
			   <?php
		}
	}
	
	?>