
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<title>Registro</title>
</head>
<body bgcolor="orange">

<style>

    .navder{
      margin-left:85rem;
    }

</style>

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

    </div>
  
  </nav>
  <center>
    <form action="operacion_guardar.php" method="POST">
    </br></br></br></br></br></br></br></br></br>
          <h3><font face="Arial">[¡Ingrese los datos!]</h3>
      <input type="text" required name="nombre" placeholder="Nombre..." value="" /><br/><br/>
      <input type="text" required name="apellido" placeholder="Apellido..." value="" /><br/><br/>
      <input type="text" required name="correo" placeholder="Correo..." value="" /><br/><br/>
      <input type="submit" value="Registrarse" />
    </form>
  </center>
</body>
</html>