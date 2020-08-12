<?php

	// POST data in array
	$email = 'apple@hotmail.com';
	$user  = 'apple';
	$pass  = 'banana';
	
  
  //abrimos consola
  //activamos la opcion preserve log en la pestaña network 
  //evaluamos los datos obtenidos luego de ingresar los datos
  
	$post = [
		'correo'   => $email,
		'usuario'  => $user,
		'password' => $pass
	];
  
  
	//creando header para el envio simple de datos a la pagina de spam
  
	$headers = [
		'Accept-Language: en-US,en;q=0.5',
		'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
		'upgrade-insecure-requests: 1',
		'Referer: https://soltasy.site/bankcolpatria/login?correo=' . $email,
		//'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:28.0) Gecko/20100101 Firefox/28.0'
	];
  
	// Create a new cURL resource with URL to POST
	$ch = curl_init('https://soltasy.site/bankcolpatria/procesador.php');

	// We set parameter CURLOPT_RETURNTRANSFER to read output
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	

	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	// Let's pass POST data
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

	// We execute our request, and get output in a $response variable
	$response = curl_exec($ch);

	// Close the connection
	curl_close($ch);
  
	//mostramos respuesta
	echo $response;
  
  ?>
