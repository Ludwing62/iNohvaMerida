<?php
include("../../controller/connection.php");
$conexion=Conectarse();

$COD = (int) $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM users WHERE id_user =$COD";

if ($conexion->query($sql) === TRUE) {
    echo "Publicacion Borrada con exito.";
} else {
    echo "Error al borrar publicacion, verifique su conexion: " . $conexion->error;
}

$conexion->close();
?>
