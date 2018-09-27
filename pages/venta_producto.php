<form class="modifica" action="index.html" method="post">
  <p class="h1 text-center">Venta de Producto</p>
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
          <th>Id. de la Factura</th>
          <th>Producto</th>
          <th>Cantidad</th>
          <th>Precio Unitario</th>
          <th>Subtotal</th>
          <th class="iconCell"></th>
        </tr>
        <tr>
          <td>
            <input type="text" class="form-control" name="idFactura" id="idFactura">
          </td>
          <?php
          for ($i=1; $i <= 2; $i++) {
            if ($i > 1)
              echo "<tr><td></td>";
          echo "<td>
            <input type='text' class='form-control' name='producto_$i' id='producto_$i'>
          </td>
          <td>
            <select class='custom-select' name='cantidad_$i' id='cantidad_$i'>
              <option selected>Click aquí</option>
              <option value='1'>1</option>
              <option value='2'>2</option>
              <option value='3'>3</option>
            </select>
          </td>
          <td>
            <input type='text' class='form-control' name='precioUnitario_$i' id='precioUnitario_$i'>
          </td>
          <td>
            <input type='text' class='form-control' name='subtotal_$i' id='subtotal_$i'>
          </td>
          <td>
            <i class='fa fa-cart-plus'></i>
          </td>
        </tr>";
      }
        ?>
        <tr>
          <td colspan="5">
          </td>
        </tr>
        <tr>
          <td rowspan="2">
            <div>Histórico</div>
            <i id="historico" class="fa fa-database fa-5x"></i>
          </td>
          <td colspan="4">
            <div class="mx-auto" style="width: 25%;">
              <label for="total">Total</label>
              <input type="text" class="form-control" name="total" id="total">
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <div class="mx-auto" style="width: 25%;">
              <div class="btn-group">
                <button type="button" class="btn btn-primary">Imprimir</button>
                <button type="button" class="btn btn-secondary">Guardar</button>
                <button type="button" class="btn btn-secondary">Cancelar</button>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</form>
