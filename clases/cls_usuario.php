<?php
require_once "claseconexion.php";
class usuario
{
    protected $codigo;
    protected $nombre;
    protected $usuario;
    protected $clave;
    
    public function __construct(){
        $this->codigo="";
        $this->nombre="";
        $this->usuario="";
        $this->clave="";
    }
    
    public function insertar($nombre, $usuario, $clave)
    {
        $conex = new conexion();
        //consulta concatenada
        $sentencia="INSERT INTO usuario (Nombre,Usuario,Clave) values ('".$nombre."','".$usuario."','".$clave."')";
        $query= mysqli_query($conex->conectar(),$sentencia);
        return $query;
    }
    
    public function actualizar($nombre,$usuario,$clave,$codigo)
    {
        $conex= new conexion();
        $conexion= $conex->conectar();
        //consulta para metrizada
        $sentencia=sprintf("UPDATE usuario SET Nombre='%s' , Usuario='%s',Clave='%s' where cod_usuario='%s'",$nombre,$usuario,$clave,$codigo);
        $query= mysqli_query($conexion,$sentencia);
        return $query;
    }
    
    public function eliminar($codigo)
    {
         $conex= new conexion();
        $conexion= $conex->conectar();
        $sentencia=sprintf("delete from usuario where cod_usuario='%s'",$codigo);
        $result= mysqli_query($conexion,$sentencia);
        return $result;
    }
    
    public function consultar()
    {
        $conex= new conexion();
        $conexion= $conex->conectar();
        $sentencia="SELECT * from usuario";
        $result= mysqli_query($conexion,$sentencia);
        return $result;
    }
    
    public function consultar_dato($codigo)
    {
       $conex= new conexion();
        $conexion= $conex->conectar();
        $sentencia="SELECT * from usuario where cod_usuario=".$codigo;
        $result= mysqli_query($conexion,$sentencia);
        $row=mysqli_fetch_assoc($result);
        return $row;   
    }
    
    
}
?>