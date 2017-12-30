<!--Registrar venta por empleado -->
<head>
    <script>
        function comprobarClave(){
            password = document.comp.password.value
            password2 = document.comp.password2.value

            if (password == password2)
                alert("Las claves coinciden.\nPuede Continuaar con el Registro")
            else
                alert("Las claves no coinciden.\nVerifique que las contraseñas Coincidan")
        }
    </script>
</head>
<div class="modal fade" id="employee_sale" role="dialog">
    <div class="modal-dialog">
        <form method="POST" action="../../../lib/php/admin_employee_registry.php" name="comp">
            <!-- Contenido del modal-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 align="center">INGRESAR DATOS DEL EMPLEADO</h2>
                </div>
                <div class="modal-body" align="center">
                    <form class="POST">
                        <input class="input" type="text" placeholder="&#128102;  Nombre" name="nombre" size="20" maxlength="30" style="width:15; font-size:30px;" required autofocus><br><br>
                        <input class="input" type="text" placeholder="&#128100;  Apellido" name="apellido" size="20" maxlength="30" style="width:15; font-size:30px;" required autofocus><br><br>
                        <input class="input" type="email" placeholder="&#128231;  Email" name="email" size="20" maxlength="30" style="width:15; font-size:30px;" required><br><br>
                        <input class="input" type="text" placeholder="&#128106;  Usuario" name="user" size="20" maxlength="30" style="width:15; font-size:30px;" required autofocus><br><br>
                        <input class="input" type="password" placeholder="&#128165;  Password" name="password" size="20"  maxlength="30" style="width:15; font-size:30px;" required><br><br>
                        <input class="input" type="password" placeholder="&#128165;  Confirmar Password" name="password2" size="20" maxlength="30" style="width:15; font-size:30px;" required><br><br>
                        <input class="hidden"  name="type_user" value="3">
                        <input class="btn-default" type="reset" value="LIMPIAR">
                        <input class="btn-defailt" type="button" value="Verificar Password" onClick="comprobarClave()">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success"> Continuar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</div>