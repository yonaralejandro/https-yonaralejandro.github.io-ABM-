<?php
include("conexion.php");
  $nombre= $_POST['nombre'];
  $apellido= $_POST['apellido'];
  $usuario= $_POST['usuario'];
  $correo= $_POST['correo'];
  $password= $_POST['password'];
  $query="INSERT INTO usuarios(nombre,apellido,usuario,correo,password) VALUES('$nombre','$apellido','$usuario','$correo','$password')";
  $resultado= $conexion->query($query);
  if($resultado){
    header("Location: tabla.php");
  }
  else{
    echo "Insercion no exitosa";
  }

?>
