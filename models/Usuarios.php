<?php
include_once '../config/Connection.php';

class Usuarios {
   private string $usuario;
   private string $password;
   private Rol $rol;
   private $habilitado;

   public function __construct(string $usuario, string $password,  enum $rol, bool $habilitado) {
     $this->usuario = $usuario;
     $this->password = $password;
     $this->rol = $rol;
     $this->habilitado = $habilitado;
   }

   public function setUsuario(string $usuario): void {
     $this->usuario = $usuario;
   } 

   public function setPassword(string $password): void {
    $this->password = $password;
   } 

   public function setRol(string $rol): void  {
    $this->rol = $rol;
}

public function setHabilitado(string $habilitado) : void  {
 $this->habilitado = $habilitado;
}

public function getUsuario () :string {
 return $this->usuario;
}

public function getPassword () :string {
    return $this->password;
   }

   public function getRol () :string  {
    return $this->rol;
   }

   public function getHabilitado () :int  {
    return $this->habilitado;
   }

 public static function insertar(Usuarios $usuario ) :array {
   $conn = Connection::getConnection();
   $query = "INSERT INTO usuarios (usuario, password, rol, habilitado) VALUES (?,?,?,?)";
   $stmt = $conn->prepare($query);
   $passwordHash = sha1($usuario->getPassword());
   $stmt->bindParam(1, $usuario->getUsuario(), PDO::PARAM_STR);
   $stmt->bindParam(2, $passwordHash, PDO::PARAM_STR);
   $stmt->bindParam(3, $usuario->getRol(), PDO::PARAM_STR);
   $stmt->bindParam(4, $usuario->getHabilitado(), PDO::PARAM_INT);
   
    $stmt->execute();
    return $usuario;
 }
}