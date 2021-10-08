<?php
    $nombre = $_POST['nombre'];
	$asunto = "Correo web Blog";
	$mensaje = $_POST['mensaje'];

	echo $nombre. " ha dicho:<br/>".$mensaje ."<br/>";
	if(mail('danlozcam@gmail.com', $asunto, $mensaje)){
		echo "<br/>Email enviado correctamente.";
	}else{
		echo "<br/>Email no enviado, ha habido un error.";
	}
