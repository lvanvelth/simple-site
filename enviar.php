<?php 
	$nombre = $_POST['nombre'];
	$mensaje = $_POST['mensaje'];
    $datos = $_POST['datos'] ;
	$asunto = "Contacto: ArizonaPark";

    $carta =  "De: $nombre \n";
    $carta .=  "Datos: $datos \n";
    $carta .=  "Mensaje: $mensaje \n";
    
    $destinatario="info@arizonapark.com.uy";

	@mail($destinatario, $asunto, $carta);

    header('Location:mensajecorrecto.html')
        
 ?>