<!DOCTYPE html>
<html>
<head>
  <title>Tabla de usuarios</title>
</head>
<body>

<nav>

<?php 
    session_start();
    if(empty($_SESSION["usuario"])){
        echo "error";
    }else{
        $variable = $_SESSION["usuario"];
    }

    echo $variable;
?>
    <div class="navder">

    <h1>Seccion principal</h1>
    <a href="cerrar_sesion.php">Cerrar Sesion</a>

</nav>

    <center>
        <table bgcolor="orange" border="3">
            <thead>
                <tr>
                    <th colspan="1"><a href="formulario.php">Nuevo</a></th>
                    <th colspan="5">Lista de usuarios</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>ID</td>
                  <td>Nombre</td>
                  <td>Apellido</td>
                  <td>Usuario</td>
                  <td>Correo</td>
                  <td>Contraseña</td>
                  <td colspan="2">Operaciones</td>

                </tr>
            <?php
                include("conexion.php");
                $query="SELECT * FROM Usuarios";
                $resultado= $conexion->query($query);
                while($row=$resultado->fetch_assoc()){
              ?>

                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['nombre']; ?></td>
                  <td><?php echo $row['apellido']; ?></td>
                  <td><?php echo $row['usuario']; ?></td>
                  <td><?php echo $row['correo']; ?></td>
                  <td><?php echo $row['password']; ?></td>
                  <td><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
                  <td><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>

                </tr>
            <?php
                }
            ?>

            </tbody>
        </table>
    </center>
</body>
</html>
