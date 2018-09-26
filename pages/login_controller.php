<?php
session_start();

$usuario = isset($_POST['user-name'])?$_POST['user-name']:'';
$password = isset($_POST['password'])?$_POST['password']:'';

if ($usuario == 'admin' && $password == 'admin') {
  echo "<nav role='navigation'>
          <div id='menuToggle'>
            <input type='checkbox' />
            <span></span>
            <span></span>
            <span></span>
            <ul id='menu'>
              <a class='opcionMenu' href='pages/home.php'><li>Inicio</li></a>
              <a class='opcionMenu' href='pages/modifica_producto.php'><li>Modificación de Productos</li></a>
              <a class='opcionMenu' href='#'><li>Venta de Producto</li></a>
              <a class='opcionMenu' href='#'><li>Compra de Producto</li></a>
              <a class='opcionMenu' href='#'><li>Proveedores</li></a>
              <a class='opcionMenu' href='#'><li>Reportes</li></a>
              <a class='opcionMenu' href='#'><li>Salir</li></a>
            </ul>
          </div>
        </nav>";
} else
  echo false;
