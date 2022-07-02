<?php
include("conexion.php");
  $id= $_REQUEST['id'];
  $nombre= $_POST['nombre'];
  $apellido= $_POST['apellido'];
  $usuario= $_POST['usuario'];
  $correo= $_POST['correo'];
  $query="UPDATE usuarios SET nombre='$nombre', apellido='$apellido', usuario='$usuario', correo='$correo' WHERE id='$id'";
  $resultado= $conexion->query($query);
  if($resultado){
    header("Location: tabla.php");
  }
  else{
    echo "Insercion no exitosa";
  }

?>
