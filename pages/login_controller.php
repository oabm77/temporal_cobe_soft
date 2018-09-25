<?php
session_start();

$usuario = isset($_POST['user-name'])?$_POST['user-name']:'';
$password = isset($_POST['password'])?$_POST['password']:'';

echo $usuario == 'admin' && $password == 'admin'?true:false;
