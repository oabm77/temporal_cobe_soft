<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="modalTitle">Ingreso al Sistema</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <img src="img/logo_cobe_soft.png" class="logo" alt="Logotipo Empresa Desarrolladora">
          <div class="btn-group p-4" role="group" aria-label="Button group">
            <button type="button" class="active btn btn-default">Pruebas</button>
            <button type="button" class="btn btn-default">Operaciones</button>
            <button type="button" class="btn btn-default">Administración</button>
          </div>
        </div>
        <form id="loginForm">
          <div class="form-group">
            <label for="user-name" class="col-form-label">Usuario:</label>
            <input type="text" class="form-control" id="user-name" name="user-name">
          </div>
          <div class="form-group">
            <label for="password" class="col-form-label">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
        </form>
      </div>
      <div class="modal-footer mx-auto">
        <button type="button" class="btn btn-primary" onclick="verificaPassword()">Aceptar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>
