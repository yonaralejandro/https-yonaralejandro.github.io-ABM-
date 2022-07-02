<!DOCTYPE html>
<html>
<head>
  <title>Guardar</title>
</head>
<body>
  <center>
    <?php
        $id=$_REQUEST['id'];
        include("conexion.php");
        $query="SELECT * FROM Usuarios WHERE id='$id'";
        $resultado= $conexion->query($query);
        $row=$resultado->fetch_assoc();
      ?>
    <form action="modificar_proceso.php?id=<?php echo $row['id']; ?>" method="POST">
      <br/><br/><br/>
      <input type="text" required name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre']; ?>" /><br/><br/>
      <input type="text" required name="apellido" placeholder="Apellido..." value="<?php echo $row['apellido']; ?>" /><br/><br/>
      <input type="text" required name="usuario" placeholder="Usuario..." value="<?php echo $row['usuario']; ?>" /><br/><br/>
      <input type="text" required name="correo" placeholder="Correo..." value="<?php echo $row['correo']; ?>" /><br/><br/>
      <input type="text" required name="password" placeholder="Contraseña..." value="<?php echo $row['password']; ?>" /><br/><br/>
      <input type="submit" value="aceptar" />
    </form>
  </center>
</body>
</html>
