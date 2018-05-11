<?php
session_start();
$usuario=$_POST['usuario'];
$password=$_POST['password'];
// conectar base de datos
include("cn.php");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
    $_SESSION['username'] = $usuario;
    header("location:../panel_de_control.php");
}
else {
    header("location:../login_error.php");

}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>