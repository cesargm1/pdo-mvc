<?php
include_once __DIR__ . '/../models/Usuarios.php';

 class UsuarioController
{
    public static function crearUsuario(Usuarios $usuario) {
        return Usuarios::insertar($usuario);
    }
}
