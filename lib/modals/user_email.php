<!--Enviar email usuario -->
<div class="modal fade" id="user_email" role="dialog">
    <div class="modal-dialog">
        <form method="POST" action="lib/php/user_email.php" name="comp">
            <!-- Contenido del modal-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 align="center">Tu opinión es importante</h1>
                </div>
                <div class="modal-body" align="center">
                    <form action="mensajero.php" method="POST" name="email_form" id="email_form">
                        <label for="">Nombre:</label><br>
                        <input type="text" name="nombre" value=""/><br><br>
                        <label for="">Ingresa tu email:</label><br>
                        <input type="email" name="email" value=""/><br><br>
                        <label for="">Mensaje:</label><br>
                        <textarea name="mensaje" id="" cols="30" rows="10"></textarea><br>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success"> Continuar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</div>