<?php
if(isset($_POST['nombre'])&&($_POST['email']!='')&&($_POST['mensaje']!='')){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    //Contenido del Mensaje
    $titulo = "Mensaje de la WEB enviado por PHP";
    $contenido =
        '<html>
			<head>
				<title>'.$titulo.'</title>
			</head>
			<body>
				<h1>Haz recibido un mensaje desde iNohva.com</h1>
				<p>El visitante'.$nombre.' te ha enviado el siguiente mensaje:</p>
				<p>Mensaje: '.$mensaje.'<br><br> Puedes contactarlo al email: '.$email.'</p>
				<hr>
				<p>Este mensaje ha sido generado automaticamente desde iNohva.com</p>
			</body>
		</html>
		';
    $encabezado = "MINE-Version: 1.0\r\n";
    $encabezado .="content-type: text/html; charset-UTF-8\r\n";
    $encabezado .= "From: iNohva Muebles Mérida<benjamin@tourachichenitza.com>\r\n";
    $encabezado .= "Reply-To: benjamin@tourachichenitza.com\r\n";

    $envio = mail($email,$titulo,$contenido,$encabezado);

    if($envio == true){
        echo "El mensaje se ha enviado correctamente";
    }
    else{
        echo "Se ha presentado un Error en el envió del Email";
    }
}
else{
    echo "Se ha presentado un Error, completa los campos del formulario";
}
?>