<form class="modifica" action="index.html" method="post">
  <p class="h1 text-center">Modificación de Producto</p>
  <div class="table-responsive">
    <table class="table table-borderless">
      <tbody>
        <tr>
          <td></td>
          <td colspan="4">
              <input type="text" class="form-control" placeholder="Búsqueda rápida del producto" aria-describedby="busqueda">
          </td>
        </tr>
        <tr>
          <td>
            <div class="btn-group-vertical">
              <button type="button" class="btn btn-secondary">Nuevo Producto</button>
              <button type="button" class="btn btn-secondary">Editar Producto</button>
            </div>
          </td>
          <td>
            <label for="producto">Producto</label>
            <input type="text" class="form-control" name="producto" id="producto">
          </td>
          <td>
            <label for="tipo">Tipo</label>
            <select class="custom-select" name="tipo" id="tipo">
              <option selected>Click aquí</option>
              <option value="1">Tipo 1</option>
              <option value="2">Tipo 2</option>
              <option value="3">Tipo 3</option>
            </select>
          </td>
          <td>
            <label for="cantidad">Cantidad</label>
            <select class="custom-select" name="cantidad" id="cantidad">
              <option selected>Click aquí</option>
              <option value="1">Cantidad 1</option>
              <option value="2">Cantidad 2</option>
              <option value="3">Cantidad 3</option>
            </select>
          </td>
          <td><label for="precio">Precio</label>
          <input type="text" class="form-control" name="precio" id="precio"></td>
        </tr>
        <tr>
          <td></td>
          <td colspan="4">
            <textarea name="resultado" class="form-control" placeholder="Resultado"></textarea>
          </td>
        </tr>
        <tr>
          <td></td>
          <td colspan="4">
            <div class="btn-group">
              <button type="button" class="btn btn-primary">Guardar</button>
              <button type="button" class="btn btn-secondary">Cancelar</button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</form>
