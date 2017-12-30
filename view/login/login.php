<?php 
require '../../controller/connection.php';

$usuarios = $mysqli->query("SELECT user, type_user
	FROM users
	WHERE user = '".$_POST['usuariolg']."'
	AND password = '".$_POST['passlg']."'");

if ($usuarios->num_rows ==1) {
	$datos = $usuarios->fetch_assoc();
	echo json_encode(array('error' => false, 'tipo' => $datos['type_user']));
}else{
	echo json_encode(array('error' => true));
}
$mysqli->close();
?>
