<?php
$mysqli = new mysqli("localhost", "root", "", "inohva");

    function Conectarse()
    {
        $link = mysqli_connect("localhost", "root", "", "inohva");
        if(!$link)
        {
            echo '<br>Ha sucedido un error inesperado en la conexiÃ³n de la base de datos';
        }
        return $link;
    }

    function disconnectDB($link)
    {
        $close = mysqli_close($link);
        if(!$close)
        {
            echo '<br>Ha sucedido un error inesperado en la desconexiÃ³n de la base de datos';
        }
        return $close;
    }
?>