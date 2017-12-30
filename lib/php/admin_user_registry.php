<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inohva";

if(isset($_POST['nombre'])	&& !empty($_POST['nombre']) &&
    isset($_POST['apellido'])	&& !empty($_POST['apellido']) &&
    isset($_POST['email'])	&& !empty($_POST['email']) &&
    isset($_POST['user'])	&& !empty($_POST['user']) &&
    isset($_POST['password'])	&& !empty($_POST['password']) &&
    isset($_POST['password2'])	&& !empty($_POST['password2']) &&
    isset($_POST['type_user'])	&& !empty($_POST['type_user']) &&
    $_POST['password'] == $_POST['password2'])

    // Crear conexión
    $conn = mysqli_connect($servername, $username, $password, $dbname);
//Si hay error en el registro, manda a fail registro.
{
    header('location: ../../fail.php');
}
// Checar conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO users (name, lastname, email, user, password,type_user)
            VALUES ('$_POST[nombre]', '$_POST[apellido]', '$_POST[email]', '$_POST[user]', '$_POST[password]', '$_POST[type_user]')";

if (mysqli_query($conn, $sql)) {
    header('location: ../../view/administrator/view/admin_user.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>