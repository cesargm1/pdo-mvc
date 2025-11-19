-- Crear base de datos
CREATE DATABASE IF NOT EXISTS gestion_usuarios
USE gestion_usuarios;

-- Crear tabla usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) UNIQUE NOT NULL,
    password CHAR(64) NOT NULL,   -- HASH SHA2-256 genera 64 caracteres hexadecimales
    rol ENUM('trabajador', 'encargado', 'directivo') NOT NULL DEFAULT 'trabajador',
    habilitado BOOLEAN NOT NULL DEFAULT 1
);
