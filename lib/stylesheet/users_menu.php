<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <title>Bienvenido a iNohva</title>
            <link rel="stylesheet" href="../css/style_menu.css">
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
            <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                    $(".menu-icon").click(function(){
                        $(".menu-icon").toggleClass("active")
                    })
                    $(".menu-icon").click(function(){
                        $(".sidebar").toggleClass("active")
                    })
                })
            </script>
        </head>
            <body>
                    <?php
                        include 'lib/modals/users_registry.php';
                        include 'lib/modals/user_email.php';
                    ?>
                <div class="menu-icon" title="Menú">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                    <div class="sidebar">
                        <a href="#"><img src="lib/img/inohvamerida.jpg"></a>
                        <ul class="menu">
                            <li><a href="#"> Inicio</a></li>
                            <li><a href="#"> ¿Quienes somos?</a></li>
                            <li><a href="#"> Departamentos</a></li>
                            <li><a href="view/users_login.php"> Iniciar Sesión</a></li><br>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#users_registry"> ¡Registrate!</button><br><br>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#user_email"> ¡Contáctanos!</button><br><br>

                        </ul>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
            </body>
</html>