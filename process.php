<?php
    if(isset($_POST["usuario"])&&isset($_POST["pwd"])){
        include("conexion.php");
        $consulta_sql = "SELECT * FROM usuarios WHERE usuario = '".$_POST["usuario"]."' and pwd='".$_POST["pwd"]."'";
        $envio_sql = $conexion->query($consulta_sql);
        if(($envio_sql->num_rows)>0){
            session_start();
            $_SESSION["usuario"]=$_POST["usuario"];
            header("Location:tabla.php");
            echo "Has iniciado sesion";
            function real_escape_string($input) {
    if(is_array($input))
        return array_map(__METHOD__, $input);

    if(!empty($input) && is_string($input)) {
        return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $input);
    }

    return $input;
}
        }else{
            echo "Nombre de usuario y/o contraseña incorrectos";
        }
    }

?>
