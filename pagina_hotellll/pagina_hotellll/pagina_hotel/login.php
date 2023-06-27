<?php
session_start();

include("conexion.php");

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$sql = "SELECT * FROM tbl_registro_cliente WHERE nombre_usuario = '".$usuario."' AND contraseña='".$contraseña."'";
$query = mysqli_query($mysqli, $sql);
$counter = mysqli_num_rows($query);

if ($counter == 1) {
    while ($reg = mysqli_fetch_array($query)) {
        $_SESSION['usuario'] = $reg['nombre_usuario'];
        $_SESSION['id'] = $reg['id'];
    }
    print "<script>alert(\"Bienvenido.\");window.location='index.php';</script>";
} else {
    print "<script>alert(\"Usuario incorrecto. Intente de nuevo.\");window.location='index.html';</script>";
}
?>
