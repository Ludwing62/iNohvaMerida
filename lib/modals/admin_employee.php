<!--Registro administrador -->
<div class="modal fade" id="users_registry_admin" role="dialog">
    <div class="modal-dialog">
        <form method="POST" action="../../../lib/php/user_registry.php" name="comp">
            <!-- Contenido del modal-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 align="center">INGRESAR DATOS</h2>
                </div>
                <div class="modal-body" align="center">
                    <form class="POST">
                        <input class="input" type="text" placeholder="&#128102;  Nombre" name="nombre" size="20" maxlength="30" style="width:15; font-size:30px;" required autofocus><br><br>
                        <input class="input" type="text" placeholder="&#128100;  Apellido" name="apellido" size="20" maxlength="30" style="width:15; font-size:30px;" required autofocus><br><br>
                        <input class="input" type="email" placeholder="&#128231;  Email" name="email" size="20" maxlength="30" style="width:15; font-size:30px;" required><br><br>
                        <input class="input" type="text" placeholder="&#128106;  Usuario" name="user" size="20" maxlength="30" style="width:15; font-size:30px;" required autofocus><br><br>
                        <input class="input" type="password" placeholder="&#128165;  Password" name="password" size="20"  maxlength="30" style="width:15; font-size:30px;" required><br><br>
                        <input class="hidden"  name="type_user" value="2">


                        <input class="btn-default btn-lg" type="reset" value="LIMPIAR">
                        <input class="btn-defailt btn-lg" type="button" value="Verificar Password" onClick="comprobarClave()">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-lg"> Continuar</button>
                    <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal"> Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</div>
