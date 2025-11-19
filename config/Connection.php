<?php
class Connection {

    private static ?PDO $conn = null;

    private const SERVERNAME = "localhost";
    private const USERNAME   = "root";      
    private const PASSWORD   = "";          
    private const DATABASE   = "gestion_usuarios"; 

    public static function getConnection(): PDO {
        if (self::$conn === null) {

            $dsn = "mysql:host=" . self::SERVERNAME . 
                   ";dbname=" . self::DATABASE . 
                   ";charset=utf8mb4";

            try {
                self::$conn = new PDO(
                    $dsn,
                    self::USERNAME,
                    self::PASSWORD,
                );

            } catch (PDOException $e) {
                throw new Exception("Error de conexión: " . $e->getMessage());
            }
        }

        return self::$conn;
    }
}
