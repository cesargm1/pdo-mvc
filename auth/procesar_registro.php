<?php
require '../models/Usuarios.php';
require '../controllers/UsuarioController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';
    $rol = $_POST['rol'] ?? '';

if (empty($usuario) || empty($password) || empty($rol)) {
    die("Todos los campos son obligatorios");
}

$controller = new UsuarioController();
$controller->crearUsuario();
}