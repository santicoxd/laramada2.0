<div id="modalLogin" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post" action="/login">
            {{csrf_field()}}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><strong> Ingreso como Administrador </strong></h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input required type="email" class="form-control" id="email" placeholder="Correo Electrónico" name="email">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Contraseña:</label>
                    <input  required type="password" class="form-control" name="pwd">
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="remember" > Recordarme</label>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-log-in"></span> Ingresar
                </button>
            </div>
            </form>
        </div>

    </div>
</div>