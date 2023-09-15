<?php
if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["usuario"]) and empty ($_POST["password"])) {
        echo '<div class="alert alert-danger">¡CAMPOS VACÍOS!</div>';
    } else {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $sql = $conexion->query("SELECT * FROM usrs WHERE usuario='$usuario' AND password='$password'");

        if ($datos=$sql->fetch_object()) {
            header("location:inicio.php");
        } else {
            echo '<div class="alert alert-danger">¡ACCESO DENEGADO!</div>';
        }
        
    }
}
?>